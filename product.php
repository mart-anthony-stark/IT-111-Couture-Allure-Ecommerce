<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/styles/global.css">
    <link rel="stylesheet" href="./assets/styles/single-product.css">
    <title>Single item</title>
</head>

<body>
    <div id="root" v-cloak>
        <nav>
            <div class="left">
                <h3 class="logo">Logo</h3>
                <div class="links">
                    <a href="./home.php">Home</a>
                    <a href="./home.php#categories">Categories</a>
                    <a href="./home.php#featured">Products</a>
                    <a href="#">About Us</a>
                </div>
            </div>
            <div class="right">
                <a href="#">Signup</a>
                <a href="#">Login</a>
                <a href="#">
                    <img class="cart" src="./assets/svg/cart.svg" alt="cart">
                </a>
            </div>

        </nav>
        <div class="container">
            <div class="item two-cols">
                <img class="item-image" :src="item.image" :alt="item.name">
                <div class="details">
                    <div>
                        <h1>{{item.name}}</h1>
                        <img class="star" v-for="x in parseInt(item.rating)" src="./assets/images/star.png" alt="rating">
                        <h4>{{item.category.toUpperCase()}}</h4>
                    </div>
                    <div class="desc">{{item.description}}</div>
                    <div class="bottom">
                        <h1 class="price">₱ {{item.price | currency}}</h1>
                        <button class="cta">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('./_footer.php')?>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script src="./assets/js/product.js"></script>

</html>