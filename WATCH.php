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
    <style>
        .product img {
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
        }

        .pagination a {
            color: coral;
        }

        .pagination li:hover {
            color: #fff;
            background-color: coral;
        }
    </style>
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

    <!-- Featured -->
    <section id="featured">
        <div class="container text-center ">
            <h3>Our featured</h3>
            <hr class="mx-auto">
            <p>Here you can check out our featured products</p>
        </div>
        <div class="row mx-auto container ">
            <?php include('server/get_watch.php'); ?>
            <?php while ($row = $watch_products->fetch_assoc()) { ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-10">
                    <img class="img-fluid mb-3" src="assets\img\<?php echo $row['product_image']; ?>" alt="Sports shoes">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                    <h4 class="p-price">Rs.<?php echo $row['product_price']; ?></h4>
                    <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn">BUY NOW</button></a>
                </div>

            <?php } ?>
        </div>
        <div class="row mx-auto container" style="padding-top:100px;">
            <?php include('server/get_watch.php'); ?>
            <?php while ($row=$watch_products1->fetch_assoc()) { ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-10">
                    <img class="img-fluid mb-3" src="assets\img\<?php echo $row['product_image']; ?>" alt="Sports shoes">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                    <h4 class="p-price">Rs.<?php echo $row['product_price']; ?></h4>
                    <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn">BUY NOW</button></a>
                </div>

            <?php } ?>
        </div>
        <div class="row mx-auto container" style="padding-bottom:50px; padding-top:100px;">
            <?php include('server/get_watch.php'); ?>
            <?php while ($row = $watch_products2->fetch_assoc()) { ?>
                <div class="product text-center col-lg-3 col-md-4 col-sm-10">
                    <img class="img-fluid mb-3" src="assets\img\<?php echo $row['product_image']; ?>" alt="Sports shoes">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                    <h4 class="p-price">Rs.<?php echo $row['product_price']; ?></h4>
                    <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn">BUY NOW</button></a>
                </div>

            <?php } ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination" style="margin-top:-80px;">
                    <li class="page-item"><a href="#" class="page-link">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
            </nav>
        </div>
    </section>


    <footer>
        <div class="row container mx-auto pt-5" style="margin-top:200px;">
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