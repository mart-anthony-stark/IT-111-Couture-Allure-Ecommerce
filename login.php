<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/styles/toastr.min.css" />
    <link rel="stylesheet" href="./assets/styles/global.css">
    <link rel="stylesheet" href="./assets/styles/login.css">
    <title>Login</title>
</head>

<body>
    <div id="root">
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
            <form @submit.prevent="login()">
                <div class="field">
                    <label>Email</label>
                    <input ref="email" type="text" placeholder="johndoe@gmail.com">
                </div>
                <div class="field">
                    <label>Password</label>
                    <input ref="password" type="password">
                </div>
                <button>LOGIN</button>
            </form>
            <span>Doesn't have an account? <a href="./signup.php">Register</a></span>
        </div>
    </section>

    <?php require('./_footer.php')?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="./assets/js/toastr.min.js"></script>
    <script src="./assets/js/login.js"></script>
</body>

</html>