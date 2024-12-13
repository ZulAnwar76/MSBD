<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title>SuwandiSecBrand - Checkout</title>
  <style>
    .payment-methods button {
      margin-bottom: 10px;
      width: 100%;
    }

    .payment-methods button.active {
      background-color: #2F4F4F !important;
      color: white !important;
      border: 2px solid #2F4F4F !important;
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
			  <li class="nav-item active"><a class="nav-link" href="index">Home</a></li>
			  <li><a class="nav-link" href="shop">Shop</a></li>
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
      <h1>Checkout</h1>
    </div>
  </div>
  <!-- End Hero Section -->

  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <!-- Billing Details -->
        <div class="col-md-6">
          <h2 class="h3 mb-3 text-black">Billing Details</h2>
          <div class="p-3 p-lg-5 border bg-white">
            <div class="form-group row">
              <div class="col-md-6">
                <label for="c_fname">First Name</label>
                <input type="text" class="form-control" id="c_fname" name="c_fname">
              </div>
              <div class="col-md-6">
                <label for="c_lname">Last Name</label>
                <input type="text" class="form-control" id="c_lname" name="c_lname">
              </div>
            </div>
            <div class="form-group">
              <label for="c_address">Address</label>
              <input type="text" class="form-control" id="c_address" placeholder="Street address">
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="c_email">Email</label>
                <input type="email" class="form-control" id="c_email" name="c_email">
              </div>
              <div class="col-md-6">
                <label for="c_phone">Phone</label>
                <input type="tel" class="form-control" id="c_phone" name="c_phone">
              </div>
            </div>
          </div>
        </div>

        <!-- Your Order -->
        <div class="col-md-6">
          <h2 class="h3 mb-3 text-black">Your Order</h2>
          <div class="p-3 p-lg-5 border bg-white">
            <table class="table site-block-order-table mb-5">
              <thead>
                <th>Product</th>
                <th>Total</th>
              </thead>
              <tbody>
                <tr>
                  <td>Top Up T-Shirt <strong>x 1</strong></td>
                  <td>$250.00</td>
                </tr>
                <tr>
                  <td class="text-black font-weight-bold">Order Total</td>
                  <td class="text-black font-weight-bold">$250.00</td>
                </tr>
              </tbody>
            </table>

            <!-- Payment Methods -->
            <div class="payment-methods">
              <button class="btn btn-outline-secondary" id="bank-transfer" onclick="selectPayment(this, 'Direct Bank Transfer')">
                Direct Bank Transfer
              </button>
              <div id="bank-transfer-details" class="collapse mt-2">
                <p class="mb-0">Transfer ke: <strong>106 0002133380 Mandiri</strong> atas nama <strong>Farida Hanum</strong></p>
              </div>

              <button class="btn btn-outline-secondary" id="cod" onclick="selectPayment(this, 'COD')">
                COD (Cash on Delivery)
              </button>
              <div id="cod-details" class="collapse mt-2">
                <p class="mb-0">Bayar di tempat saat barang diterima.</p>
              </div>

              <button class="btn btn-outline-secondary" id="dana" onclick="selectPayment(this, 'Dana')">
                Dana
              </button>
              <div id="dana-details" class="collapse mt-2">
                <p class="mb-0">Nomor Dana: <strong>+62 896-5326-6351</strong></p>
              </div>
            </div>

            <div class="form-group mt-4">
              <button class="btn btn-black btn-lg py-3 btn-block" onclick="placeOrder()">Place Order</button>
            </div>
          </div>
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

		<script>
			function selectPayment(button, method) {
			  // Reset all buttons
			  const buttons = document.querySelectorAll('.payment-methods button');
			  buttons.forEach(btn => btn.classList.remove('active'));
		
			  // Activate selected button
			  button.classList.add('active');
		
			  // Collapse other payment details
			  document.querySelectorAll('.payment-methods .collapse').forEach(collapse => collapse.classList.remove('show'));
		
			  // Show selected payment details
			  const detailId = button.id + '-details';
			  document.getElementById(detailId).classList.add('show');
			  console.log('Selected Payment Method:', method);
			}
		
			function placeOrder() {
			  alert('Your order has been placed successfully!');
			}
		  </script>
		
		  <script src="js/bootstrap.bundle.min.js"></script>
		</body>
		</html>