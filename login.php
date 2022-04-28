<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/styles/global.css">
    <link rel="stylesheet" href="./assets/styles/login.css">
    <title>Login</title>
</head>

<body>
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
    <section class="two-cols">
        <div class="image"></div>
        <div class="form-container center col">
            <h1 class="welcome">Welcome Back to <br />Couture Allure</h1>
            <form action="#">
                <div class="field">
                    <label>Email</label>
                    <input type="text" placeholder="johndoe@gmail.com">
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password">
                </div>
                <button>LOGIN</button>
            </form>
            <span>Doesn't have an account? <a href="./signup.php">Register</a></span>
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
</body>

</html>