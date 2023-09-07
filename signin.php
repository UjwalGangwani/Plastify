<?php
    session_start();
    echo"Succcesfully Logged in";
    $con= mysqli_connect('localhost','root');
    if($con){
        echo"Connection Successfully";
    }
    else{
        echo "No connection";
    }
    mysqli_select_db($con,'plastify');
    $name=$_POST['Login_name'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    $mobileno=$_POST['Mobileno'];

    $quer="select * from userdata where Login_name - '$name' && password - '$pass' && email - '$email' && Mobileno - '$mobileno' ";
    $result = mysqli_query($con,$quer);
    $num = mysqli_num_rows($result);
    if($num==1){

        $_SESSION['email'] =$email;
        header('location:LoginPage.html');

    }
    else
    {
        
        header('location:index.html');
    }
?> 