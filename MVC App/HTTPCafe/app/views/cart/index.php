<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Cart-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
<header>
    <nav>
        <ul>
            <li><a class="logo">
                    <span class="nav-icon"><i class="fas fa-mug-hot"></i></span>
                    <span class="nav-option">HTTPcafe</span>
                </a></li>
            <li><a href="<?php echo URL?>Home">
                    <span class="nav-icon"><i class="fas fa-home"></i></span>
                    <span class="nav-option">Home</span>
                </a></li>
            <li><a href="<?php echo URL?>Menu">
                    <span class="nav-icon"><i class="fab fa-elementor"></i></span>
                    <span class="nav-option">Menu</span>
                </a>
            </li>
            <li><a href="<?php echo URL?>Merchandise">
                    <span class="nav-icon"><i class="fas fa-gifts"></i></span>
                    <span class="nav-option">Merchandise</span>
                </a></li>
            <li><a>
                    <span class="nav-icon"><i class="fas fa-user-alt"></i></span>
                    <span class="nav-option"><?php echo $data['username']; ?></span>
                </a>
                <ul>
                    <li><a href="<?php echo URL?>Reset">
                            <span class="nav-icon"><i class="fas fa-key"></i></span>
                            <span class="nav-option">Change password</span>
                        </a></li>
                    <li><a href="<?php echo URL?>Login/logOut">
                            <span class="nav-icon"><i class="fas fa-sign-out-alt"></i></span>
                            <span class="nav-option">Log Out</span>
                        </a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<main>
    <p class="title">
        Cart
    </p>

    <?php echo $data['catalog']; ?>

</main>
</body>

</html>