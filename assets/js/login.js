new Vue({
  el: "#root",
  methods: {
    validateEmail(email) {
      return String(email)
        .toLowerCase()
        .match(
          /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
    },
    validateInputs(email, password) {
      let valid = true;
      if (!this.validateEmail(email)) {
        toastr.error("Invalid email input");
        valid = false;
      }
      if (password.length === 0) {
        toastr.error("Password must be filled");
        valid = false;
      }
      return valid;
    },
    async login() {
      const email = this.$refs.email.value;
      const password = this.$refs.password.value;
      if (this.validateInputs(email, password)) {
        const res = await fetch(`./api/auth/login.php`, {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ email, password }),
        });
        const data = await res.json();
        if (!res.ok) {
          toastr.error(data.msg);
        } else {
          toastr.success("Successfully logged in!");
          localStorage.setItem("x-access-token", data["x-access-token"]);
          setInterval(() => {
            window.location = "./home.php";
          }, 1000);
        }
      }
    },
  },
  async mounted() {
    const res = await fetch(`./api/auth/verify.php`, {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
        authorization: `bearer ${localStorage.getItem("x-access-token")}`,
      },
    });
    if (res.ok) window.location = "./home.php";
  },
});
