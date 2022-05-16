new Vue({
  el: "#root",
  data() {
    return {
      user: null,
      cart: [],
    };
  },
  methods: {
    logout() {
      localStorage.clear();
      location.reload();
    },
    async fetchCart() {
      const res = await fetch("./api/cart/get-cart.php?user=" + this.user.id);
      const data = await res.json();
      this.cart = data;
    },
    async deleteItem(id) {
      await fetch(`./api/cart/delete.php?id=${id}`);
      await this.fetchCart();
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
    } else {
      window.location = "./login.php";
    }

    this.fetchCart();
  },
});
