new Vue({
  el: "#root",
  data() {
    return {
      item: {
        id: 1,
        category: "",
        name: "0",
        image: "",
        description: "",
        rating: 0,
        price: 0,
      },
      user: null,
      quantity: 1,
    };
  },
  filters: {
    currency(val) {
      return parseInt(val)
        .toFixed(2)
        .replace(/\d(?=(\d{3})+\.)/g, "$&,");
    },
  },
  methods: {
    logout() {
      localStorage.clear();
      location.reload();
    },
    getQueryVariable(testVar) {
      const query = window.location.search.substring(1);
      const vars = query.split("&");
      for (let i = 0; i < vars.length; i++) {
        const pair = vars[i].split("=");
        if (decodeURIComponent(pair[0]) == testVar) {
          return decodeURIComponent(pair[1]);
        }
      }
    },
    async checkAuth() {
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
    changeQuantity(mode) {
      switch (mode) {
        case "add":
          this.quantity++;
          break;
        case "minus":
          if (this.quantity > 1) this.quantity--;
          break;
      }
    },
    async addToCart() {
      if (!this.user) {
        toastr.info("You must log in first");
        return;
      }

      const body = JSON.stringify({
        user: this.user.id,
        item: this.item.id,
        quantity: this.quantity,
      });

      // const res = await fetch(`./api/cart/add.php`, {
      //   method: "POST",
      //   headers: { "Content-Type": "application/json" },
      //   body,
      // });
      console.log(body);

      toastr.success("Item was added to your cart");
      this.quantity = 1;
    },
  },
  async mounted() {
    const res = await fetch(`./api/products?id=${this.getQueryVariable("id")}`);
    if (!res.ok) return (window.location = "./home.php");
    const data = await res.json();
    this.item = data[0];

    this.checkAuth();
  },
});
