<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/styles/toastr.min.css" />
    <link rel="stylesheet" href="./assets/styles/global.css">
    <link rel="stylesheet" href="./assets/styles/single-product.css">
    <title>Single item</title>
</head>

<body>
    <div id="root" v-cloak>
        <?php require('./_nav.php');?>

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
                        <div class="quantity">
                            <button @click="changeQuantity('minus')">-</button>
                            <span>{{quantity}}</span>
                            <button @click="changeQuantity('add')">+</button>
                        </div>
                        <button @click="addToCart" class="cta">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('./_footer.php')?>
</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="./assets/js/toastr.min.js"></script>
<script src="./assets/js/product.js"></script>

</html>