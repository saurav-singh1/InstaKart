<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
            <img  class="logo" src="assets\img\Untitled document (2).jpg" alt="logo">
            <h2 class="brand"></h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                       <a href="cart.php"> <i class="fas fa-shopping-cart"></i></a>
                        <a href="account.php"><i class="fas fa-user"></i></a>
                    </li>
                    <!-- <li class="nav-item">
                        <i class="fas fa-user"></i>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
        <div class="container">
            <img  class="logo" src="assets\img\Untitled document (2).jpg" alt="logo">
            <h2 class="brand"></h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                       <a href="cart.php"> <i class="fas fa-shopping-cart"></i></a>
                        <a href="account.php"><i class="fas fa-user"></i></a>
                    </li>
                    <!-- <li class="nav-item">
                        <i class="fas fa-user"></i>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>



 <!-- Featured -->
 <!--<section id="featured">
    <div class="container text-center ">
        <h3>Our featured</h3>
        <hr class="mx-auto">
        <p>Here you can check out our featured products</p>
    </div>
    <div class="row mx-auto container-fluid ">
        <div class="product text-center col-lg-3 col-md-4 col-sm-10">
            <img class="img-fluid mb-3" src="assets\img\featured1.webp" alt="Sports shoes">
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">Rs.200</h4>
            <button class="buy-btn">BUY NOW</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-10">
            <img class="img-fluid mb-3" src="assets\img\shirt.jpg" alt="Casual Shirts">
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Casual Shirts</h5>
            <h4 class="p-price">Rs.699</h4>
            <button class="buy-btn">BUY NOW</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-10">
            <img class="img-fluid mb-3" src="assets\img\sports shoe.webp" alt="Sports shoes">
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">Rs.200</h4>
            <button class="buy-btn">BUY NOW</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-10">
            <img class="img-fluid mb-3" src="assets\img\sports shoe.webp" alt="Sports shoes">
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">Rs.200</h4>
            <button class="buy-btn">BUY NOW</button>
        </div>
        <hr class="bhr"> -->
    <!-- </div>
</section> -->
<section id="shop" class="w-100">
    <div class="row p-0 m-0">
        <!-- first -->
        <div class="one col-lg-3 col-md-3 col-sm-12 p-0">
            <img class="image-fluid" src="assets\img\coat3.jpg" alt="Shoes">
            <div class="details">
                <h2>MEN</h2>
                <a href="MEN.php"> <button class="text-uppercase">Shop now</button></a>
            </div>
        </div>
        <!-- Second -->
        <div class="one col-lg-3 col-md-3 col-sm-12 p-0">
            <img class="image-fluid" src="assets\img\coat2.jpg" alt="Jacket">
            <div class="details">
                <h2>WOMEN</h2>
                <a href="WOMEN.php"> <button class="text-uppercase">Shop now</button></a>
            </div>
        </div>
        <!-- Three -->
        <div class="one col-lg-3 col-md-3 col-sm-12 p-0">
            <img class="image-fluid" src="assets\img\BOYS.webp" alt="Watches">
            <div class="details">
                <h2>BOYS</h2>
                <a href="BOYS.php"> <button class="text-uppercase">Shop now</button></a>
                
            </div>
        </div>
        <!-- Fourth -->
        <div class="one col-lg-3 col-md-3 col-sm-12 p-0">
            <img class="image-fluid" src="assets\img\girl.webp" alt="abcd">
            <div class="details">
                <h2>GIRLS</h2>
                <a href="GIRLS.php"> <button class="text-uppercase">Shop now</button></a>
            </div>
    </div>

    </div>
</section>
<section id="shop1" class="w-100">
    <div class="row p-0 m-0">
        <!-- first -->
        <div class="one col-lg-3 col-md-3 col-sm-12 p-0">
            <img class="image-fluid" src="assets\img\watch2.jpeg" alt="Shoes">
            <div class="details">
                <h2>WATCHES</h2>
                <a href="WATCH.php"> <button class="text-uppercase">Shop now</button></a>
            </div>
        </div>
        <!-- Second -->
        <div class="one col-lg-3 col-md-3 col-sm-12 p-0">
            <img class="image-fluid" src="assets\img\Bag.jpeg" alt="Jacket">
            <div class="details">
                <h2>BAGS</h2>
                <a href="BAG.php"> <button class="text-uppercase">Shop now</button></a>
            </div>
        </div>
        <!-- Three -->
        <div class="one col-lg-3 col-md-3 col-sm-12 p-0">
            <img class="image-fluid" src="assets\img\shoes2.jpeg" alt="Watches">
            <div class="details">
                <h2>SHOES</h2>
                <a href="SHOE.php"> <button class="text-uppercase">Shop now</button></a>
            </div>
        </div>
        <!-- Fourth -->
        <div class="one col-lg-3 col-md-3 col-sm-12 p-0">
            <img class="image-fluid" src="assets\img\girl.webp" alt="abcd">
            <div class="details">
                <h2>HOODYs</h2>
                <a href="HOODY.php"> <button class="text-uppercase">Shop now</button></a>
            </div>
    </div>

    </div>
</section>

  <!-- footer -->
  <footer>
    <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <img class="logo_footer" style="height: 260px; width:220; margin-top:-103px;margin-left:-53px; margin-bottom: -93px;" src="assets\img\InstaKart-logos_transparent.png" alt="logo">
            <p class="pt-3">We provide the best products for the most affordable prices </p>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Featured</h5>
            <ul class="text-uppercase">
                <li><a href="#">men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">boys</a></li>
                <li><a href="#">girls</a></li>
                <li><a href="#">new ARRIVALS</a></li>
                <li><a href="#">clothes</a></li>
            </ul>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">CONTACT US</h5>
            <div>
                <h6 class="text-uppercase">Address</h6>
                <p>Mohali Chandigarh</p>
            </div>
            <div>
                <h6 class="text-uppercase">Phone</h6>
                <p>6201005889</p>
            </div>
            <div>
                <h6 class="text-uppercase">e-mail</h6>
                <p>20BCS9422@CUCHD.in</p>
                <!-- <p>20BCS9427@CUCHD.in</p>
                <p>20BCS9472@CUCHD.in</p> -->
            </div>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Instagram</h5>
            <div class="row">
                <img src="assets\img\watch1.jpeg" class="img-fluid w-25  m-2" alt="" style="height:62px;">
                <img src="assets\img\shoes1.jpeg" class="img-fluid w-25  m-2" alt=""  style="height:62px;">
                <img src="assets\img\coat2.jpg" class="img-fluid w-25  m-2" alt="" style="height:62px;">
                <img src="assets\img\featured5.jpeg" class="img-fluid w-25  m-2" alt="" style="height:62px;">
                <img src="assets\img\featured1.webp" class="img-fluid w-25  m-2" alt="" style="height:62px;">
                <img src="assets\img\watch3.jpeg" class="img-fluid w-25 m-2" alt="" style="height:62px;">
            </div>
        </div>
    </div>
        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <img src="assets\img\footer payment.png" alt="mm">
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
                    <p>eCommerce @ 2022 All Right Reserved</p>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    
</footer>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>