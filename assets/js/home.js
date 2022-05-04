new Vue({
  el: "#root",
  data() {
    return {
      user: null,
    };
  },
  methods: {
    logout() {
      localStorage.clear();
      location.reload();
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
    if (res.ok) {
      const data = await res.json();
      this.user = data[0];
    }
  },
});
