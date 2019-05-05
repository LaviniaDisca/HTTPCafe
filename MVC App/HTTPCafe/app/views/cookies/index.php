<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cookies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Products-style.css">
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
            <li><a>
                    <span class="nav-icon"><i class="fab fa-elementor"></i></span>
                    <span class="nav-option">Menu</span>
                </a>
                <ul>
                    <li><a href="<?php echo URL?>Coffees">
                            <span class="nav-icon">☕</span>
                            <span class="nav-option">Coffees</span>
                        </a></li>
                    <li><a href="<?php echo URL?>Freshes">
                            <span class="nav-icon">🍹</span>
                            <span class="nav-option">Freshes</span>
                        </a></li>
                    <li><a href="<?php echo URL?>MiniCakes">
                            <span class="nav-icon">🍰</span>
                            <span class="nav-option">Mini-Cakes</span>
                        </a></li>
                    <li><a>
                            <span class="nav-icon">🍪</span>
                            <span class="nav-option">Cookies</span>
                        </a></li>
                    <li><a href="<?php echo URL?>Pretzels">
                            <span class="nav-icon">🥐</span>
                            <span class="nav-option">Pretzels</span>
                        </a></li>
                </ul>
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
                    <li><a href="<?php echo URL?>Cart">
                            <span class="nav-icon"><i class="fas fa-shopping-cart"></i></span>
                            <span class="nav-option">Cart</span>
                        </a></li>
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
        Cookies
    </p>
    <?php echo $data['catalog']; ?>
</main>
</body>

</html>