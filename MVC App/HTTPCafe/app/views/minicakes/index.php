<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mini-Cakes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/Mini-Cakes-style.css">
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
            <li><a href="Home">
                    <span class="nav-icon"><i class="fas fa-home"></i></span>
                    <span class="nav-option">Home</span>
                </a></li>
            <li><a>
                    <span class="nav-icon"><i class="fab fa-elementor"></i></span>
                    <span class="nav-option">Menu</span>
                </a>
                <ul>
                    <li><a href="Coffees">
                            <span class="nav-icon">☕</span>
                            <span class="nav-option">Coffees</span>
                        </a></li>
                    <li><a href="Freshes">
                            <span class="nav-icon">🍹</span>
                            <span class="nav-option">Freshes</span>
                        </a></li>
                    <li><a>
                            <span class="nav-icon">🍰</span>
                            <span class="nav-option">Mini-Cakes</span>
                        </a></li>
                    <li><a href="Cookies">
                            <span class="nav-icon">🍪</span>
                            <span class="nav-option">Cookies</span>
                        </a></li>
                    <li><a href="Pretzels">
                            <span class="nav-icon">🥐</span>
                            <span class="nav-option">Pretzels</span>
                        </a></li>
                </ul>
            </li>
            <li><a href="Merchandise">
                    <span class="nav-icon"><i class="fas fa-gifts"></i></span>
                    <span class="nav-option">Merchandise</span>
                </a></li>
            <li><a>
                    <span class="nav-icon"><i class="fas fa-user-alt"></i></span>
                    <span class="nav-option">User</span>
                </a>
                <ul>
                    <li><a href="Cart">
                            <span class="nav-icon"><i class="fas fa-shopping-cart"></i></span>
                            <span class="nav-option">Cart</span>
                        </a></li>
                    <li><a href="Reset">
                            <span class="nav-icon"><i class="fas fa-key"></i></span>
                            <span class="nav-option">Change password</span>
                        </a></li>
                    <li><a href="Login">
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
        Mini-Cakes
    </p>
    <?php echo $data; ?>
</main>
</body>

</html>