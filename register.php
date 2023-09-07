<?php
    session_start();
    header('location:LoginPage.html');
    $con= mysqli_connect('localhost','root');
    if($con){
        echo"Connection Successfully";
    }
    else{
        echo "No connection";
    }
    mysqli_select_db($con,'plastify');
    $name=$_POST['Login_name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $mobileno=$_POST['Mobileno'];

    $quer="Select * from userdata where Login_name - '$name' && password - '$password' && email - '$email' && Mobileno - '$mobileno' ";
    $result = mysqli_query($con,$quer);
    $num = mysqli_num_rows($result);
    if($num==1){

        echo"Duplicate Data";

    }
    else
    {
        $querr = "insert into userdata(Login_name, password, email, Mobileno) values('$name','$password', '$email', '$mobileno')";
        mysqli_query($con,$querr);
    }
?> 