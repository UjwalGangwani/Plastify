<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/styleLogin.css">
    <title>Document</title>
</head>
<body>
<?php

// Set database credentials
$servername = "localhost";
$Email = "email";
$password = "password";
$dbname = "plastify";

// Create connection
$conn= mysqli_connect('localhost','root');
    if($conn){
        // echo"Connection Successfully";
    }
    else{
        echo "No connection";
    }
    mysqli_select_db($conn,'plastify');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user has submitted the login form
if (isset($_POST['login'])) {
    
    // Sanitize the user input
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Retrieve user data from the database
    $sql = "SELECT * FROM userdata WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // User exists, so set a session variable and redirect to dashboard
        session_start();
        $_SESSION['email'] = $Email;
        header('Location: index.html');
        exit();
    } else {
        // User does not exist, show an error message
        $error = "Invalid email or password";
    }
}

?>

<!-- Display the login form -->
<form class="container" action="LoginPage.php" method="POST">
        <div class="container d-flex justify-content-center">
            <div class="d-flex flex-column justify-content-between">
                <div class="card mt-5 p-5">
                    <div class="logo mb-3 ms-4"><img src="footerlogo.jpg" required="" class="rounded-circle" style="height: 200px;">
                    </div>
                    <a href="registrationForm.html" class="btn-warning ms-2" required="" style="text-decoration: none;">Don't have an account? Register!</a>
                </div>
                <div class="card two bg-white px-5 py-4 mb-3 ">
                    <div class="form-group"><input type="email" name="email" class="form-control loginEmail" id="mail" required><label class="form-control-placeholder userdata" style="font-size: 15px;" for="mail">Email</label></div>
    
                    <div class="form-group"><input type="password" name="password" class="form-control loginPassword" id="password" required><label class="form-control-placeholder userdata" style="font-size: 15px;" for="password">Password</label></div>
    
                    <div class="d-flex justify-content-center " >
                        <input type="submit" name="login" value="login" id=""> 
                          <!-- <a  class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</a> -->
                        <!-- <button type="button"
                          class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button> -->
                    </div>
                </div>
            </div>
        </div>
    </form>


</body>
</html>