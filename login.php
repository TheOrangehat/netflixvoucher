<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";
$errW = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username and password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                        else{
                            $errW = "Password or username incorrect";
                        }
                    }

                }
                else{
                    $errW = "Password or username incorrect";
                }

    }
}    


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Gift Accounts</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
    <div class="loginBox">
        <div class="circelBack"><img src="./Images/logo.PNG" alt=""></div>
        <div class="formDiv">
            <h3>Login to Account</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Enter Username here :</label>
                    <label for="username"><?php if(!empty($err)){
                        echo $err;
                    } 
                    else if(!empty($errW)){
                        echo $errW;
                    }
                    ?></label>
                    <input type="text" name="username" id="1" placeholder="Username">
                </div>
                
                <div class="form-group">
                    <label for="password">Enter Password here :</label>
                    <input type="password" name="password" id="2" placeholder="********">
                </div>
                <button type="submit" >Log in</button>
            </form>
        </div>
        <div class="text">
        <!-- <p>you are not making a permanent account, we will demolish this in 48hrs if you are offline.</p> -->
        <a href="./register.php">Don't have a account Creat one!</a></div>
    </div>


    <script src="./javascript/login.js"></script>
</body>
</html>