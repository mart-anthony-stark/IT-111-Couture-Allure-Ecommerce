<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/styles/global.css">
    <link rel="stylesheet" href="./assets/styles/products.css">
    <title>Products</title>
</head>

<body>
    <div id="root" v-cloak>
        <nav>
            <div class="left">
                <h3 class="logo">CA</h3>
                <div class="links">
                    <a href="./home.php">Home</a>
                    <a href="./home.php#categories">Categories</a>
                    <a href="./home.php#featured">Products</a>
                    <a href="#">About Us</a>
                </div>
            </div>
        </nav>
        <section>
            <h1 class="section-header text-center">{{category}}</h1>
            <div class="products">
                <div v-for="(product, i) in filteredProducts" class="product-card">
                    <img class="prod" :src="product.image">

                    <div class="details">
                        <span class="price">
                            ₱ {{
                                product.price | currency
                            }}
                        </span>
                        <span class="stars"><img v-for="x in parseInt(product.rating)" :key="x" src="./assets/images/star.png" alt="as"></span>
                    </div>
                    <button @click="viewProduct(product.id)">View Product</button>
                </div>
                <h1 v-if="filteredProducts.length == 0">There are no products.</h1>
            </div>
        </section>


        <?php require('./_footer.php')?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="./assets/js/products.js"></script>
</body>

</html>