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
    <form action="<?php echo URL?>Reset/change" method="post" enctype="multipart/form-data">
        <p>E-mail address: </p>
        <input type="email" name="email" placeholder="Enter e-mail here" required>
        <span class="help-block"><?php echo $data['email']; ?></span>
        <p>
            New password:
        </p>
        <input type="password" name="newPassword" placeholder="Enter new password" minlength="6" required>
        <span class="help-block"><?php echo $data['pass']; ?></span>
        <p>Confirm password: </p>
        <input type="password" name="confirmPassword" placeholder="Confirm password" minlength="6" required>
        <input type="submit" value="Reset password" class="button">
    </form>
</div>
</body>

</html>