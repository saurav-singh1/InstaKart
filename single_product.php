<?php
include('server/connection.php');
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id=?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();

    $product = $stmt->get_result(); //array

    // no product id was given
} else {
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script>
        $(document).ready(function() {
            $("#hide").click(function() {
                $("#hs").hide();
            });
            $("#show").click(function() {
                $("#hs").show();
            });
        });
    </script>

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

    <section class="container single-product" style="margin-top: 100px; padding-bottom: 60px;">
        <div class="row">
            <?php while ($row = $product->fetch_assoc()) { ?>

                <div class="col-lg-5 col-md-6 col-sm-12">
                    <img class="img-fluid" style="height:380px; width:100%; margin-top:95px" src="assets\img\<?php echo $row['product_image']; ?>" alt="" id="mainImg">
                    <div class="small-img-group"style="margin-top:5px;">
                        <div class="small-img-col">
                            <img src="assets\img\<?php echo $row['product_image']; ?>" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="assets\img\<?php echo $row['product_image']; ?>" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="assets\img\<?php echo $row['product_image3']; ?>" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="assets\img\<?php echo $row['product_image4']; ?>" width="100%" class="small-img" alt="">
                        </div>
                    </div>
                </div>

                <div class="side col-lg-6 col-md-12" style="padding-top: 105px; padding-left: 60px;">
                    <h6>Men/Shoes</h6>
                    <h3><?php echo $row['product_name']; ?></h3>
                    <h2>RS.<?php echo $row['product_price']; ?></h2>
                    <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>" />

                        <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
                        <input type="number" name="product_quantity" value="1">
                        <button class="buy-btn" type="submit" name="add_to_cart">Add to cart</button>
                    </form>

                    <h4 class="mt-5 mb-2">Product Details</h4>
                    <span id="hs"><?php echo $row['product_description']; ?></span> <br>
                    <button id="hide" class="buy-btn">Hide</button>
                    <button id="show" class="buy-btn">Show</button>
                   
                </div>

            <?php } ?>


        </div>
    </section>

    <section id="related_product" style="margin-bottom:-109px; margin-top: 50px;">
        <div class="container text-center ">
            <h3>Related product</h3>
            <hr class="mx-auto">
            <p>Here you can check related products</p>
        </div>
        <div class="row mx-auto container-fluid ">
            <?php include('server/get_watch.php');?>
            <?php while($row= $watch_products->fetch_assoc()){?>
            <div onclick="window.location.href='single_product.html'" class="product text-center col-lg-3 col-md-4 col-sm-10">
                <img class="img-fluid mb-3" src="assets\img\<?php echo $row['product_image'];?>" alt="Sports shoes">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name'];?></h5>
                <h4 class="p-price">Rs.<?php echo $row['product_price'];?></h4>
                <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">BUY NOW</button></a>

            </div>
            <!-- <hr class="bhr"> -->
            <?php }?>
            <!-- <hr class="bhr"> -->
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


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script>
        var mainImg = document.getElementById("mainImg");
        var smallImg = document.getElementsByClassName("small-img");
        for (let i = 0; i < 4; i++) {
            smallImg[i].onclick = function() {
                mainImg.src = smallImg[i].src;
            }
        }
    </script>

</body>

</html>