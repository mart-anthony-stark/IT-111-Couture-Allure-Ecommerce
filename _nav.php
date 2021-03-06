<?php
?>
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
<div v-if="!user" class="right">
    <a href="signup.php">Signup</a>
    <a href="./login.php">Login</a>
</div>
<div v-else class="logged-right">
    <a href="./cart.php">
        <img class="cart" src="./assets/svg/cart.svg" alt="cart">
    </a>
    <button v-if="user" class="logout" @click="logout()">Logout</button>
</div>
</nav>