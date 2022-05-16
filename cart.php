<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/styles/toastr.min.css" />
    <link rel="stylesheet" href="./assets/styles/global.css">
    <link rel="stylesheet" href="./assets/styles/cart.css">
    <title>Signup</title>
</head>

<body>
    <div id="root" v-cloak>
    <?php include('./_nav.php')?>

    <section class="">
       <table>
           <thead>
               <th></th>
               <th>
                   Product
               </th>
               <th>
                   Price
               </th>
               <th>
                   Quantity
               </th>
               <th>
                   Action
               </th>
           </thead>
           <tbody>
               <tr v-for="item in cart">
                    <td><input type="checkbox" name="" id=""></td>
                    <td><img class="preview" :src="item.image" alt=""></td>
                    <td><h2>₱ {{item.price}}</h2></td>
                    <td class="quantity-controls">
                        <button>-</button>
                        <span>{{item.quantity}}</span>
                        <button>+</button>
                    </td>
                    <td>
                        <button @click="deleteItem(item.id)" class="delete-btn">DELETE</button>
                    </td>
                    <hr>
               </tr>
           </tbody>
       </table>
    </section>
    
    
    <?php require('./_footer.php')?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="./assets/js/toastr.min.js"></script>
    <script src="./assets/js/cart.js"></script>
</body>

</html>