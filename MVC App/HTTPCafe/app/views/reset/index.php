<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Reset password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Reset-style.css">
</head>

<body>
<div class="resetbox">
    <img src="<?php echo URL?>public/images/fixcil.png" class="avatar" alt="Image">
    <h1>Change password</h1>
    <form action="">
        <p>E-mail adress:</p>
        <input type="email" name="email" placeholder="Enter e-mail here">
        <p>
            New password :
        </p>
        <input type="password" name="password" placeholder="Enter new password">
        <p>Confirm password : </p>
        <input type="password" name="password" placeholder="Confirm password">
        <button type="submit" formaction="Login"> Reset password</button>
    </form>
</div>
</body>

</html>