<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="SuwandiSecBrand">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="Premium Sneakers and Shoes Collection" />
  <meta name="keywords" content="shoes, sneakers, fashion, footwear, nike, adidas" />

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="css/tiny-slider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title>SuwandiSecBrand - Premium Shoes</title>

  <style>
    .product-item {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 10px;
      overflow: hidden;
      position: relative;
    }
    .product-item:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(26, 24, 24, 0.1);
    }
    .product-item .icon-cross {
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .product-item:hover .icon-cross {
      opacity: 1;
    }
    .hero {
      background: linear-gradient(135deg, #ade0b5 0%, #b4caed 100%);
      padding: 100px 0;
    }
    .product-title {
      font-size: 1rem;
      font-weight: 600;
      color: #713a3a;
      margin-top: 10px;
    }
    .product-price {
      color: #007bff;
      font-size: 1.2rem;
    }
  </style>
</head>

<body>
  <!-- Start Header/Navigation -->
  <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
		<div class="container">
		  <a class="navbar-brand" href="index">SuwandiSecBrand<span>.</span></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarsFurni">
			<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
        <li><a class="nav-link" href="index">Home</a></li>
        <li class="nav-item active"><a class="nav-link" href="shop">Shop</a></li>
			  <li><a class="nav-link" href="about">About us</a></li>
			  <li><a class="nav-link" href="services">Services</a></li>
			  <li><a class="nav-link" href="contact">Contact us</a></li>
			  <li><a class="nav-link" href="login">Login</a></li>
			  <li><a class="nav-link" href="register">Register</a></li>
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
  <!-- End Header/Navigation -->

  <!-- Start Hero Section -->
  <div class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="intro-excerpt">
            <h1 class="mb-4">Step into Style</h1>
            <p class="mb-4">Discover our latest collection of premium sneakers and shoes. Comfort meets fashion in every step.</p>
            <p>
              <a href="#" class="btn btn-primary me-2">Shop Now</a>
              <a href="#" class="btn btn-outline-primary">Explore Collection</a>
            </p>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <img src="images/sp33.jpg" class="img-fluid" alt="Latest Shoe Collection" style="max-height: 400px;">
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->

  <div class="untree_co-section product-section before-footer-section">
    <div class="container">
      <div class="row">
        <!-- Shoe Products -->
        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/sp36.jpg" class="img-fluid product-thumbnail">
            <h3 class="product-title">Street Style Sneakers</h3>
            <strong class="product-price">Rp 100.000</strong>
            <span class="icon-cross">
              <img src="images/cross.svg" class="img-fluid">
            </span>
          </a>
        </div>

        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/sp20.jpg" class="img-fluid product-thumbnail">
            <h3 class="product-title">Nike Classic Collection</h3>
            <strong class="product-price">Rp 125.000</strong>
            <span class="icon-cross">
              <img src="images/cross.svg" class="img-fluid">
            </span>
          </a>
        </div>

        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/sp12.jpg" class="img-fluid product-thumbnail">
            <h3 class="product-title">Adidas Blue Signature</h3>
            <strong class="product-price">Rp 259.000</strong>
            <span class="icon-cross">
              <img src="images/cross.svg" class="img-fluid">
            </span>
          </a>
        </div>

        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="#">
            <img src="images/sp35.jpg" class="img-fluid product-thumbnail">
            <h3 class="product-title">Vintage Brown Leather</h3>
            <strong class="product-price">Rp 350.000</strong>
            <span class="icon-cross">
              <img src="images/cross.svg" class="img-fluid">
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Start Footer Section -->
  <footer class="footer-section">
    <div class="container">
      <div class="row justify-content-center">
        <!-- Kolom Logo dan Teks -->
        <div class="col-lg-4 text-center">
          <div class="mb-4 footer-logo-wrap">
            <a href="#" class="footer-logo">SuwandiSecBrand<span>.</span></a>
          </div>
          <p class="mb-4">
            Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant.
          </p>
  
          <ul class="list-unstyled custom-social">
            <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
            <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
            <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer Section -->
  

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>