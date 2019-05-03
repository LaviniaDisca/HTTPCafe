<?php
session_start();

$_SESSION['message'] = '';

$db = mysqli_connect("127.0.0.1", "httpcafe", "httpcoffee", "httpcafe") or die("Cannot connect to Database ");

if (($_SERVER["REQUEST_METHOD"] ?? 'GET') == 'POST') {

    $username = $_POST['username'];
    $query = " SELECT * from users where username = '$username'";
    $result = $db->query($query);
    if (mysqli_num_rows($result) == 0) {
        $email = $_POST['email'];

        //md5 hash password for security
        $password = md5($_POST['password']);

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        //check if mysql query is successful
        if ($db->query($sql) === true) {
            //redirect the user to login.php
            header("location: login.php");
        }
    } else {
        $_SESSION['message'] = 'Username already in use!';
    }

    $db->close();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/Register-style.css">
</head>

<body>
<div class="registerbox">
    <img src="public/images/fixcil.png" class="avatar" alt="Image">
    <h1>Register here</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <p>
            Username :
        </p>
        <input type="text" name="username" placeholder="Enter username" required/>
        <p>Email : </p>
        <input type="email" name="email" placeholder="Enter e-mail here" required/>
        <p>Password : </p>
        <input type="password" name="password" placeholder="Enter password" required/>
        <button type="submit" formaction="Login">Register</button>
        <a href="Login">Already have an account? Log in!</a>
    </form>
</div>
</body>

</html>