<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wishlist</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .navbar-brand {
      font-weight: bold;
      color: white !important;
    }

    .nav-link {
      color: #ccc !important;
    }

    .nav-link:hover {
      color: white !important;
    }

    .active-nav {
      color: white !important;
      border-bottom: 2px solid #f9c947;
    }

    .hero {
      background-color: #2f4f4f;
      color: white;
      padding: 40px 0;
      text-align: center;
    }

    .hero h1 {
      font-size: 48px;
      margin: 0;
    }

    .wishlist-container {
      padding: 40px 0;
    }

    .wishlist-item {
      text-align: center;
      padding: 20px;
    }

    .wishlist-item img {
      max-width: 100%;
      border-radius: 10px;
    }

    .wishlist-item h5 {
      margin-top: 15px;
      font-size: 18px;
    }

    .wishlist-item p {
      font-size: 16px;
      color: #555;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index">SuwandiSecBrand<span>.</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact us</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-5">
          <li class="nav-item">
            <a class="nav-link" href="user"><img src="images/user.svg" alt="User" width="24"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart"><img src="images/cart.svg" alt="Cart" width="24"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wishlist"><img src="images/wishlist.svg" alt="Wishlist" width="24"></a>
          </li>
          </ul>	
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero">
    <div class="container">
      <h1>My Wishlist</h1>
    </div>
  </div>

  <!-- Wishlist Section -->
  <div class="container wishlist-container">
    <div class="row">
      <!-- Wishlist Item 1 -->
      <div class="col-md-3 wishlist-item">
        <img src="images/sp1.jpg" alt="Shoe 1">
        <h5>Air Jordan 1</h5>
        <p>$150.00</p>
      </div>
      <!-- Wishlist Item 2 -->
      <div class="col-md-3 wishlist-item">
        <img src="images/sp2.jpg" alt="Shoe 2">
        <h5>Nike Air Max</h5>
        <p>$120.00</p>
      </div>
      <!-- Wishlist Item 3 -->
      <div class="col-md-3 wishlist-item">
        <img src="images/sp3.jpg" alt="Shoe 3">
        <h5>Adidas Yeezy</h5>
        <p>$200.00</p>
      </div>
      <!-- Wishlist Item 4 -->
      <div class="col-md-3 wishlist-item">
        <img src="images/sp4.jpg" alt="Shoe 4">
        <h5>Puma Suede</h5>
        <p>$90.00</p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
