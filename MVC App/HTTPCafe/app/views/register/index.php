<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo URL ?>public/css/Register-style.css">
</head>

<body>
<div class="registerbox">
    <img src="<?php echo URL ?>public/images/fixcil.png" class="avatar" alt="Image">
    <h1>Register here</h1>
    <form action="<?php echo URL ?>Register/addUser" method="post" enctype="multipart/form-data">
        <p>
            Username:
        </p>
        <input type="text" name="username" placeholder="Enter username" required>
        <span class="help-block"><?php echo $data['name']; ?></span>
        <p>Email: </p>
        <input type="email" name="email" placeholder="Enter e-mail here" required>
        <span class="help-block"><?php echo $data['email']; ?></span>
        <p>Password: </p>
        <input type="password" name="password" placeholder="Enter password" required>
        <input type="submit" value="Register" class="button">
        <a href="<?php echo URL ?>Login">Already have an account? Login!</a>
    </form>
</div>
</body>

</html>