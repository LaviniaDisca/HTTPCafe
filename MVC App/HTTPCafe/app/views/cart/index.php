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
                    <li><a href="<?php echo URL?>Cookies">
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
                    <span class="nav-option">User</span>
                </a>
                <ul>
                    <li><a>
                            <span class="nav-icon"><i class="fas fa-shopping-cart"></i></span>
                            <span class="nav-option">Cart</span>
                        </a></li>
                    <li><a href="<?php echo URL?>Reset">
                            <span class="nav-icon"><i class="fas fa-key"></i></span>
                            <span class="nav-option">Change password</span>
                        </a></li>
                    <li><a href="<?php echo URL?>Login">
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

    <div class="catalog">
        <div class="product">
            <img src="<?php echo URL?>public/images/chocochip.jpg" alt="chocochip">
            <h1>Chocolate Chip Cookies</h1>
            <p class="price">$19.99</p>
            <button class="button">
                <span class="remove-sign"><i class="fas fa-times"></i></span>
                <span class="button-text">Remove</span>
            </button>
        </div>

        <div class="product">
            <img src="<?php echo URL?>public/images/granola.jpg" alt="granola">
            <h1>Healthy Five-Ingredient Granola Bar</h1>
            <p class="price">$19.99</p>
            <button class="button">
                <span class="remove-sign"><i class="fas fa-times"></i></span>
                <span class="button-text">Remove</span>
            </button>
        </div>

        <div class="product">
            <img src="<?php echo URL?>public/images/oats.jpg" alt="oats">
            <h1>Peanut Butter Oat Snack Cookies</h1>
            <p class="price">$19.99</p>
            <button class="button">
                <span class="remove-sign"><i class="fas fa-times"></i></span>
                <span class="button-text">Remove</span>
            </button>
        </div>
        <div class="product">
            <img src="<?php echo URL?>public/images/Macaroons.jpg" alt="macaroons">
            <h1>Macaroons</h1>
            <p class="price">$19.99</p>
            <button class="button">
                <span class="remove-sign"><i class="fas fa-times"></i></span>
                <span class="button-text">Remove</span>
            </button>
        </div>
        <div class="product">
            <img src="<?php echo URL?>public/images/madeleines.jpg" alt="madeleines">
            <h1>Madeleines</h1>
            <p class="price">$19.99</p>
            <button class="button">
                <span class="remove-sign"><i class="fas fa-times"></i></span>
                <span class="button-text">Remove</span>
            </button>
        </div>
        <div class="product">
            <img src="<?php echo URL?>public/images/frost.jpg" alt="frost">
            <h1>Frosted Cookies</h1>
            <p class="price">$19.99</p>
            <button class="button">
                <span class="remove-sign"><i class="fas fa-times"></i></span>
                <span class="button-text">Remove</span>
            </button>
        </div>
        <button class="order">
            <span class="button-text"> <b>Place order</b></span>
        </button>
    </div>
</main>
</body>

</html>