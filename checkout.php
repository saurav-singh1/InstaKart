<?php
session_start();
if (!empty($_SESSION['cart'])) {
    // let's user in

    // send user to shop page
} else {
    header('location:shop.php');
}

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
            <img class="logo" src="assets\img\Untitled document (2).jpg" alt="logo">
            <h2 class="brand"></h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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


    <!-- Checkout -->
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Checkout</h2>
            <hr class="mx-auto">
        </div>

        <div class="mx-auto container">
            <form action="server/place_order.php" method="POST" id="checkout-form">
                <p class="text-center" style="color:red;"><?php if (isset($_GET['message'])) {
                                                                echo $_GET['message'];
                                                            } ?>
                                                            <?php if (isset($_GET['message'])) {?>
                                                                <a href="login.php" class="btn btn-primary">Login</a>

                                                                <?php }?>
                                                                
                                                        
                                                        
                                                        
                                                        </p>
                <div class="form-group checkout-small-element">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" id="checkout-name" required="abcd" title="Enter your name">
                </div>
                <div class="form-group checkout-small-element">
                    <label for="">Phone Number</label>
                    <input type="tel" class="form-control" name="phone" placeholder="xxxxx-xxxxx" id="checkout-number" required pattern="[0-9]{5}[0-9]{5}" title="Enter '10' digit number ">
                </div>
                <div class="form-group checkout-small-element">
                    <label for="">E-mail</label>
                    <input type="text" class="form-control" name="email" placeholder="name@gmail.com" id="checkout-email" required title="Enter your E-mail">
                </div>
                <div class="form-group checkout-small-element">
                    <label for="">City</label>
                    <input type="text" class="form-control" name="city" placeholder="City name" id="checkout-city" title="Enter your City name">
                </div>
                <div class="form-group checkout-large-element">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address" id="checkout-address" title="Enter your Address">
                </div>

                <div class="form-group checkout-btn-container">
                    <p>Total amount: Rs.<?php echo $_SESSION['total'] ?></p>
                    <input type="submit" name="place_order" class="btn" id="checkout-btn" value="Place Order">
                </div>
            </form>

        </div>

    </section>





























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
                    <img src="assets\img\shoes1.jpeg" class="img-fluid w-25  m-2" alt="" style="height:62px;">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>