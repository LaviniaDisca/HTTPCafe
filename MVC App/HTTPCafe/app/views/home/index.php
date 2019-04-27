<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>HTTP Cafe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo URL?>public/css/style.css">
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
            <li><a>
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
                </a>
            </li>
            <li><a>
                    <span class="nav-icon"><i class="fas fa-user-alt"></i></span>
                    <span class="nav-option">User</span>
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
    <section>
        <div class="slogan">
            <h1>The best coffee you can find on the web</h1>
            <h2>Students, gather 'round to taste HEAVEN</h2>
        </div>
        <h3>
            <div class="arrow">
                <p><i class="fas fa-caret-left"></i></p>
            </div>
            <div class="overlay">
                <div class="item-of-the-day">Item of the day</div>
                <div class="product">
                    <img src="<?php echo URL?>public/images/cappuccino.jpg" alt="cappuccino">
                    <h1>Cappuccino</h1>
                    <p class="price">$19.99</p>
                    <button class="button">
                        <div class="button-text">Order</div>
                    </button>
                </div>
            </div>
        </h3>
    </section>
</main>
</body>

</html>