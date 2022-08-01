<?php
ini_set('display_errors', '0');


session_start();
// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}

require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                    
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
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
            <h3>Create Account</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Enter Username here :</label>
                    <label for="username"><?php echo $username_err ?></label>
                    <input type="text" name="username" id="1" placeholder="Username">
                </div>
                
                <div class="form-group">
                    <label for="password">Enter Password here :</label>
                    <label for="password"><?php echo $password_err ?></label>
                    
                    <input type="password" name="password" id="2" placeholder="********">
                </div>
                
                <div class="form-group">
                    <label for="confirm_password">Confirm password :</label>
                    <input type="password" name="confirm_password" id="5" placeholder="********">
                </div>
                <button type="submit">Submit!</button>
            </form>
        </div>
        <div class="text">
        <p>you are not making a permanent account, we will demolish this in 48hrs if you are offline.</p>
        <a href="./login.php">already have an account Login here!</a></div>
    </div>


    <script src="./javascript/login.js"></script>
</body>
</html>