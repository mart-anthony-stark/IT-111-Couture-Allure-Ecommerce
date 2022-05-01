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
  async mounted() {
    const res = await fetch(`./api/products?id=${this.getQueryVariable("id")}`);
    if (!res.ok) return (window.location = "./home.php");
    const data = await res.json();
    this.item = data[0];
  },
});
