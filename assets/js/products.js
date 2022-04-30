const CATEGORIES = ["dresses", "bags", "shoes", "cosmetics"];

const app = new Vue({
  el: "#root",
  data() {
    return {
      category: "Products",
      products: [],
    };
  },
  computed: {
    filteredProducts() {
      if (!CATEGORIES.includes(this.category.toLowerCase())) {
        return this.products;
      }

      return this.products.filter(
        (product) =>
          product.category.toLowerCase() === this.category.toLowerCase()
      );
      console.log(this.category);
    },
  },
  methods: {
    parseCategory() {
      // Check if category query is valid product category
      const category = this.getQueryVariable("category");
      if (!category || !CATEGORIES.includes(category)) return;

      this.category = category[0].toUpperCase() + category.slice(1);
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
    viewProduct: (id) => {
      window.location = `./product.php?id=${id}`;
    },
  },
  async mounted() {
    this.parseCategory();
    const res = await fetch(`./api/products`);
    const data = await res.json();
    if (res.ok) this.products = data;
  },
});
