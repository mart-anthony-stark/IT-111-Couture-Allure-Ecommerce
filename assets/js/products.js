const CATEGORIES = ["dress", "bags", "shoes", "cosmetics"];

const app = new Vue({
  el: "#root",
  data() {
    return {
      category: "Products",
      products: [],
    };
  },
  computed: {
    filteredProducts: () => {
      if (this.category.toLowerCase() === "products") {
        return products;
      }

      return products.filter(
        (product) =>
          product.category.toLowerCase() === this.category.toLowerCase()
      );
    },
  },
  methods: {
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
  },
  mounted() {
    const category = this.getQueryVariable("category");
    if (!category) return;

    this.category = category[0].toUpperCase() + category.slice(1);
  },
});
