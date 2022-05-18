
    <?php include('layout/headers.php')?>
    
    
    <!-- Home -->
    <section id="home">

        <div class="container">
            <h5 class="new">NEW ARRIVALS</h5>
            <h1><span>Best Price</span> This Season</h1>
            <p>E-shop offers the best products for the most affordable prices</p>
            <a href="shop.php"><button>Shop Now</button></a>
        </div>
    </section>
    <!-- Brand -->
    <section id="brand" class="container">
        <div class="row">
            <!-- <img class="img-fluid-col-lg-2 col-md-2 col-sm-12" src="assets\img\Adidas.png" alt="Adidas">
            <img class="img-fluid-col-lg-2 col-md-2 col-sm-12" src="assets\img\HRX.webp" alt="HRX">
            <img class="img-fluid-col-lg-2 col-md-2 col-sm-12" src="assets\img\Pepejeans.png" alt="Pepejeans">
            <img class="img-fluid-col-lg-2 col-md-2 col-sm-12" src="assets\img\The Roadster.webp" alt="Roadster">
            <img class="img-fluid-col-lg-2 col-md-2 col-sm-12" src="assets\img\Levis.png" alt="Levis">
            <img class="img-fluid-col-lg-2 col-md-2 col-sm-12" src="assets\img\Jordan.png" alt="Jordan"> -->
            <img class="img-fluid-col-lg-2 col-md-3 col-sm-12" src="assets\img\brand1.jpeg" alt="Jordan">
            <img class="img-fluid-col-lg-2 col-md-3 col-sm-12" src="assets\img\brand2.jpeg" alt="Jordan">
            <img class="img-fluid-col-lg-2 col-md-3 col-sm-12" src="assets\img\brand3.jpeg" alt="Jordan">
            <img class="img-fluid-col-lg-2 col-md-3 col-sm-12" src="assets\img\brand4.jpeg" alt="Jordan">
        </div>
    </section>
    <!-- New -->
    <section id="new" class="w-100 pt-4">
        <div class="row p-0 m-0">
            <!-- first -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="image-fluid" src="assets\img\1.jpeg" alt="Shoes">
                <div class="details">
                    <h2>Extremely Awesome Shoes</h2>
                    <button class="text-uppercase">Shop now</button>
                </div>
            </div>
            <!-- Second -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="image-fluid" src="assets\img\jacket.jpg" alt="Jacket">
                <div class="details">
                    <h2>Awesome Jacket</h2>
                    <button class="text-uppercase">Shop now</button>
                </div>
            </div>
            <!-- Three -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="image-fluid" src="assets\img\3.jpeg" alt="Watches">
                <div class="details">
                    <h2>50% Off Watches</h2>
                    <button class="text-uppercase">Shop now</button>
                </div>
            </div>
            <!-- Fourth -->
            <!-- <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="image-fluid" src="" alt="abcd">
                <div class="details">
                    <h2>Extremely Awesome Shoes</h2>
                    <button class="text-uppercase">Shop now</button>
                </div> -->
        </div>

        </div>
    </section>
    <!-- Featured -->
    <section id="featured">
        <div class="container text-center ">
            <h3>Our featured</h3>
            <hr class="mx-auto">
            <p>Here you can check out our featured products</p>
        </div>
        <div class="row mx-auto container-fluid ">
            <?php include('server/get_featured_products.php');?>
            <?php while($row= $featured_products->fetch_assoc()){?>
            <div class="product text-center col-lg-3 col-md-4 col-sm-10">
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
            <?php }?>
        </div>
    </section>
    <!--Banner-->
    <section id="banner" class="mb-5">
        <div class="container">
            <h4>MID SEASON'S SALE</h4>
            <h1>Autumn Collection <br>UP to 30% OFF</h1>
            <button class="text uppercase">Shop Now</button>
        </div>
    </section>
    <!--clothes-->
    <section id="clothes" class="mb-5 mt-5">
        <div class="container text-center ">
            <h3>Dresses & Coats</h3>
            <hr class="mx-auto">
            <p>Here you can check out our amazing clothes</p>
        </div>
        <div class="row mx-auto container-fluid ">
            <?php include('server/get_coats.php');?>
            <?php while($row=$coats_products->fetch_assoc()){?>
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
        </div>
    </section>
    <!-- Watches-->
    <section id="Watches">
        <div class="container text-center ">
            <h3>Watches</h3>
            <hr class="mx-auto">
            <p>Here you can check out our amazing watches</p>
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
        </div>
    </section>
    <!--Shoes-->
    <section id="Shoes" class="mb-5 mt-5">
        <div class="container text-center ">
            <h3>Shoes</h3>
            <hr class="mx-auto">
            <p>Here you can check out our amazing shoes</p>
        </div>
        <div class="row mx-auto container-fluid ">
              <?php include('server/get_shoes.php');?>
            <?php while($row= $shoes_products->fetch_assoc()){?>
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

    
    <?php include('layout/footer.php')?>