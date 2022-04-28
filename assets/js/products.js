const CATEGORIES = ["dresses", "bags", "shoes", "cosmetics"];

const app = new Vue({
  el: "#root",
  data() {
    return {
      category: "Products",
      products: [
        {
          id: 1,
          category: "dresses",
          name: "Rib-knit Puff Sleeve Sexy Dress",
          image:
            "https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/1.jpg?raw=true",
          price: 1200,
        },
        {
          id: 2,
          category: "dresses",
          name: "Sexy korean plain dress",
          image:
            "https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/2.jpg?raw=true",
          price: 1200,
        },
        {
          id: 3,
          category: "dresses",
          name: "Off shoulder maxi korean elegant dress",
          image:
            "https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/3.jpg?raw=true",
          price: 1200,
        },
        {
          id: 4,
          category: "dresses",
          name: "ANNIKA Bangkok Floral Ribbon Dress",
          image:
            "https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Dresses/4.jpg?raw=true",
          price: 1200,
        },
        {
          id: 9,
          category: "shoes",
          name: "Korean fashion 2.5 inches heels",
          image:
            "https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Shoes/9.jpg?raw=true",
          price: 1200,
        },
        {
          id: 5,
          category: "bags",
          name: "Chain fashion Lady crossbody bag",
          image:
            "https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Bags/5.jpg?raw=true",
          price: 1200,
        },
        {
          id: 6,
          category: "bags",
          name: "Korean Fashion Leather Sling Bag",
          image:
            "https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Bags/6.jpg?raw=true",
          price: 1200,
        },
        {
          id: 7,
          category: "bags",
          name: "YZ Korean fashion Canvas sling bag",
          image:
            "https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Bags/7.jpg?raw=true",
          price: 1200,
        },
        {
          id: 8,
          category: "bags",
          name: "Flagship Korean Fashion Shoulder Leather Bag",
          image:
            "https://github.com/mart-anthony-stark/Couture-Allure-Assets/blob/main/Bags/8.jpg?raw=true",
          price: 1200,
        },
      ],
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
      window.location = `/product.html?id=${id}`;
    },
  },
  mounted() {
    const category = this.getQueryVariable("category");
    if (!category || !CATEGORIES.includes(category)) return;

    this.category = category[0].toUpperCase() + category.slice(1);
  },
});
