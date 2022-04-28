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
                            ₱ {{product.price}}
                        </span>
                        <span class="name">{{product.name}}</span>
                    </div>
                    <button @click="viewProduct(product.id)">View Product</button>
                </div>
            </div>
        </section>


        <footer>
            <div class="logo">
                Couture
                <span>Allure</span>
            </div>
            <div class="products-link">
                <h1 class="col-title">Products</h1>
                <div class="links">
                    <a href="#">Dresses</a>
                    <a href="#">Shoes</a>
                    <a href="#">Blogs</a>
                    <a href="#">Cosmetics</a>
                </div>
            </div>
            <div class="payments">
                <h1 class="col-title">We Accept</h1>
                <div class="flex">
                    <img src="./assets/svg/paypal.svg" alt="">
                    <img src="./assets/svg/visa.svg" alt="">
                </div>
                <div class="flex">
                    <img src="./assets/svg/cod.svg" alt="">
                    <img src="./assets/svg/gcash.svg" alt="">
                    <img src="./assets/svg/mastercard.svg" alt="">
                </div>
            </div>
            <div class="connect">
                <div class="newsletter">
                    <span class="title">Newsletter</span>
                    <div class="email-input">
                        <input type="email" placeholder="johndoe@gmail.com">
                        <button>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="socials">
                    <span class="title">Follow us</span>
                    <div class="icons flex">
                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="./assets/js/products.js"></script>
</body>

</html>