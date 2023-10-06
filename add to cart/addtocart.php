<?php
                // Step 1: Connect to the database
                $servername = 'localhost';
                $name = 'Product_name';
                $type = 'Product_type';
                $description = 'product_description';
                $Quantity = 'quantity';
                $dbname = 'plastify';
                
                $con= mysqli_connect('localhost','root');
                if($con){
                    // echo"Connection Successfully";
                }
                else{
                    echo "No connection";
                }
                mysqli_select_db($con,'plastify');
                // Step 2: Retrieve the value from the database
                $result = mysqli_query($con, "SELECT sum(quantity) as quantity FROM recyclingpagedata");
                $row = mysqli_fetch_assoc($result);
                $value = $row['quantity'];

                // Step 3: Increment the retrieved value
                $value = $value;
                // die(var_dump ($value));
                // Step 4: Display the updated value on the frontend
                // echo "The updated value is: " . $value;

            
            ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="addtocart.css">
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles.css">
<!--box-icons-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
                <style>.btn1{
    padding:6px ;
    background-color: #77dd77;
    font-weight: 200;
    border-radius: 5px;
    margin:none;
}
.token{
    padding: 7px 20px;
    background-color: white;
    border: 1px solid #77dd77;
    color:#77dd77 ;
    font-weight: bold;
    margin-left: 28rem;
    margin-right: 1rem;
    position: relative;
}</style>
    </head>
    <body>
        <div class="header">

            <p class="logo">PLASTIFY</p>
            <div class="token" style="padding:10px 20px">E-Coins 🪙 <?= $value;?> 
            
           
            </div>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>
        <div class="container">
            <div id="root"></div>
            <div class="sidebar">
                <div class="head"><p>My Cart</p></div>
                <div id="cartItem">Your cart is empty 
                
                </div>
                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total">Rs 0.00</h2>
                </div>
                <div class="btn1">CHECKOUT 🛒</div>
               
            </div>
            
        </div>
        <script src="addtocart.js"></script>
    </body>
</html>