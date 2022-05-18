<?php
session_start();
include('server/connection.php');
// danger
if (isset($_SESSION['logged_in'])){
    header('location:account.php');
    exit;
}
// danger end{5-8}
if (isset($_POST['login_btn'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT user_id,user_name,user_email,user_password FROM users WHERE user_email=? AND user_password = ? LIMIT 1");
   $stmt->bind_param('ss',$email,$password);
    if ($stmt->execute()) {
        $stmt->bind_result($user_id, $user_name, $user_email, $user_password);
        $stmt->store_result();

        if ($stmt->num_rows() == 1) {
            $stmt->fetch();
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $user_name;
            $_SESSION['user_email'] = $user_email;
            $_SESSION['logged_in'] = true;

            header('location:account.php?login_success=logged in successfully');
        }
        else{
            header('location:login.php?error=Could Not Verify Your Account');
        }
    } else {
        // error
        header('location:login.php?error=something went wrong');
    }
}


?>






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

    <!-- login -->

    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Login</h2>
            <hr class="mx-auto">
        </div>

        <div class="mx-auto container">
            <form action="login.php" method="POST" id="login-form">
                <p style="color:red;" class="text-centre"><?php if(isset($_GET['error']))
                {echo $_GET['error'];}?></p>
                <div class="form-group">
                    <label for="">E-mail</label>
                    <input type="text" class="form-control" name="email" placeholder="E-mail" id="login-email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" id="login-password">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn" id="login-btn" value="Login" name="login_btn">
                </div>
                <div class="form-group">
                    <a href="register.php" id="register-url" class="btn">Don't have account? Sign In</a>
                </div>


            </form>

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>