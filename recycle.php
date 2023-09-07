<?php
    session_start();
    
    $con= mysqli_connect('localhost','root');
    if($con){
        echo"Connection Successfully";
    }
    else{
        echo "No connection";
    }
    mysqli_select_db($con,'plastify');
    $name=$_POST['Product_name'];
    $type=$_POST['Product_type'];
    $description=$_POST['product_description'];
    $Quantity=$_POST['quantity'];
    


    $quer="Select * from recyclingpagedata where Product_name - '$name' && Product_type - '$type' && product_description - '$description' && quantity - '$Quantity' ";
    $result = mysqli_query($con,$quer);
    $num = mysqli_num_rows($result);
    if($num==1)
    {

        echo"Duplicate Data";

    }
    else
    {
        $querr = "insert into recyclingpagedata(Product_name, Product_type,product_description, quantity) values('$name','$type', '$description', '$Quantity')";
        mysqli_query($con,$querr);
        header('location:index.html');
    }
?>