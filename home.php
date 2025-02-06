<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Furniture E-Commerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Sparkle Your Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="products.html">Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="cart.html">Cart</a></li>
                <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout</a></li>
                <li class="nav-item"><a class="nav-link" href="contacts.html">Contacts</a></li>
                <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
            </ul>
            <!-- Search Bar -->
            <form class="d-flex ms-3">
                <input class="form-control me-2" type="search" placeholder="Search products..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero bg-light text-center py-5">
    <div class="container">
        <h1 class="display-4">Discover Our New Collection</h1>
        <p class="lead">Explore stylish furniture for every room.</p>
        <a href="products.html" class="btn btn-primary btn-lg">Shop Now</a>
    </div>
</section>

<!-- Browse Categories -->
<section class="container text-center my-5">
    <h2>Browse The Range</h2>
    <div class="row mt-4">
        <div class="col-md-4"><img src="images/dining.jpg" class="img-fluid category-img" alt="Dining"><p>Dining</p></div>
        <div class="col-md-4"><img src="images/living.jpg" class="img-fluid category-img" alt="Living"><p>Living</p></div>
        <div class="col-md-4"><img src="images/bedroom.jpg" class="img-fluid category-img" alt="Bedroom"><p>Bedroom</p></div>
    </div>
</section>

<!-- Newsletter Subscription Section -->
<section class="newsletter">
    <div class="container text-center">
      <h2>Subscribe to Our Newsletter</h2>
      <p>Get updates on new products and exclusive offers.</p>
      <form class="d-flex justify-content-center">
        <input type="email" class="form-control w-50" placeholder="Enter your email" required>
        <button type="submit" class="btn btn-primary ms-2">Subscribe</button>
      </form>
    </div>
</section>

<!-- Footer -->
<footer class="footer text-center py-3">
    <div class="container">
        <p>&copy; 2025 Sparkle Your Home. All rights reserved.</p>
        <p>Contact us: support@sparkleyourhome.com | +250 790791450</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
