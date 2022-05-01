new Vue({
  el: "#root",
  data() {
    return {
      item: {
        id: 1,
        category: "",
        name: "0",
        image: "",
        price: 0,
      },
    };
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
