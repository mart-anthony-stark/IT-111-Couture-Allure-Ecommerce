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
    login() {
      const email = this.$refs.email.value;
      const password = this.$refs.password.value;
      if (this.validateInputs(email, password))
        toastr.success("Successfully logged in!");
    },
  },
  mounted() {},
});
