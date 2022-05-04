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
    validateInputs(email, password, contact, name) {
      let valid = true;
      console.log(
        email.length == 0,
        password.length == 0,
        contact.length == 0,
        name.length == 0
      );
      if (
        email.length == 0 ||
        password.length == 0 ||
        contact.length == 0 ||
        name.length == 0
      ) {
        toastr.error("All inputs are required to be filled");
        return false;
      }
      if (!this.validateEmail(email)) {
        toastr.error("Invalid email input");
        valid = false;
      }
      if (isNaN(contact) || contact.length !== 11) {
        toastr.error("Contact number must be 11-digit numeric characters");
        valid = false;
      }
      if (password.length < 8) {
        toastr.error("Password must be atleast 8 characters");
        valid = false;
      }
      return valid;
    },
    async signup() {
      const name = this.$refs.name.value;
      const email = this.$refs.email.value;
      const contact = this.$refs.contact.value;
      const password = this.$refs.password.value;
      if (this.validateInputs(email, password, contact, name)) {
        const res = await fetch(`./api/auth/signup.php`, {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ email, password, contact, name }),
        });
        const data = await res.json();
        if (!res.ok) {
          toastr.error(data.msg);
        } else {
          toastr.success("Successfully created an account!");
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
