<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AleDrogo</title>
    <link rel="stylesheet" href="../CSS/index.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" />
</head>
<body>
    <header>
        <h1>AleDrogo</h1>
        <nav>
            <form action="/search" method="post">
                <input type="text" name="query" placeholder="Search..." required>
                <button type="submit" class="material-symbols-outlined">search</button>
            </form>
            <ul id="categoryList"> Kategorie
                <li class="categoryItems">AGD
                    <ul>
                        <li><a href="dasd">asdasd</a></li>
                        <li>dupa2</li>
                        <li>dupa3</li>
                    </ul>
                </li>
                <li class="categoryItems">dupa2</li>
                <li class="categoryItems">dupa3</li>
            </ul>
        </nav>
        <div id="cart">
            <a href="">Cart</a>
            <span class="count">0</span>
        </div>
        <div id="account">
            <a href="">Login in</a>
            <a href="">Sing in</a>
            <!-- do napisania if user is logged in -->
        </div>
    </header>
    <section>
        <h2>Welcome to AleDrogo</h2>
        <p>Your one-stop shop for all things amazing!</p>
        <div class="products">
            <!-- Example product -->
            <div class="product">
                <h3>Product Name</h3>
                <p>Description of the product.</p>
                <span class="price">$19.99</span>
                <button>Add to Cart</button>
            </div>
            <!-- More products can be added here -->         
        </div>

    </section>
    <footer>
        <p>&copy; 2025 AleDrogo. All rights reserved.</p>
        <ul>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/privacy">Privacy Policy</a></li>
        </ul>
    </footer>
    <script src="../JS/category.js"></script>
</body>
</html>