<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/styles/global.css">
    <link rel="stylesheet" href="./assets/styles/home.css">
    <title>Home</title>
</head>

<body>
    <div id="root" v-cloak>
    <?php require('./_nav.php')?>

    <section class="banner">
        <div class="search">
            <span class="lang">EN</span>
            <input type="text" placeholder="Search">
        </div>
        <div class="slider">
            <div class="slide">
                <div class="left">
                    <img src="./assets/svg/woman.svg" alt="woman fashion">
                </div>
                <div class="right">
                    <div class="welcome">
                        <div class="sitename">
                            <h1>Couture Allure</h1>
                            <span>Make people adore you</span>
                        </div>
                        <button onclick="navigate('./products.php')">SHOP NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Categories Section -->
    <section id="categories" class="categories">
        <div class="section-title">
            <h1>Categories</h1>
        </div>
        <div class="cards">
            <div class="category">
                <h1>DRESSES</h1>
                <button onclick="navigate('./products.php?category=dresses')">View Products</button>
            </div>
            <div class="category">
                <h1>SHOES</h1>
                <button onclick="navigate('./products.php?category=shoes')">View Products</button>
            </div>
            <div class="category">
                <h1>BAGS</h1>
                <button onclick="navigate('./products.php?category=bags')">View Products</button>
            </div>
            <div class="category">
                <h1>COSMETICS</h1>
                <button onclick="navigate('./products.php?category=cosmetics')">View Products</button>
            </div>
        </div>
    </section>

    <section id="featured" class="featured-products">
        <div class="section-title">
            <h1>Featured Products</h1>
        </div>
        <div class="products">
            <div class="product-card">
                <img class="prod" src="./assets/images/Products/Dresses/2.jpg">
                <div class="details">
                    <span class="price">
                        ₱ 700
                    </span>
                </div>
                <button onclick="navigate('./product.php?id=2')">View Product</button>
            </div>
            <div class="product-card">
                <img class="prod" src="./assets/images/Products/Bags/5.jpg">
                <div class="details">
                    <span class="price">
                        ₱ 1200
                    </span>
                </div>
                <button onclick="navigate('./product.php?id=17')">View Product</button>
            </div>
            <div class="product-card">
                <img class="prod" src="./assets/images/Products/Bags/6.jpg">
                <div class="details">
                    <span class="price">
                        ₱ 999
                    </span>
                </div>
                <button onclick="navigate('./product.php?id=18')">View Product</button>
            </div>
            <div class="product-card">
                <img class="prod" src="./assets/images/Products/Shoes/9.jpg">
                <div class="details">
                    <span class="price">
                        ₱ 700
                    </span>
                </div>
                <button onclick="navigate('./product.php?id=28')">View Product</button>
            </div>
        </div>
        <div class="btn-container">
            <button class="view-all"><a href="./products.php">View All Products</a></button>
        </div>
    </section>

    <?php require('./_footer.php')?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    

<script src="./assets/js/home.js"></script>
<script src="./assets/js/app.js"></script>

</html>