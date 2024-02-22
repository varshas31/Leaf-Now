<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
            <meta charset="UTF-8">
            <meta name="description" content="">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- The above 4 meta tags must come first in the head; any other head content must come after these tags -->
        
            <!-- Title -->
            <title>Shop</title>
        
            <!-- Favicon -->
            <link rel="icon" href="img/core-img/favicon.ico">
        
            <!-- Core Stylesheet -->
            <link rel="stylesheet" href="shopstyle.css">       
    </head>

<body>


<header class="header-area">

    <!-- *** Top Header Area *** -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Top Header Content -->
                        <div class="top-header-meta">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="leafnowofficial@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: leafnowofficial@gmail.com</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="+91 987654321"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +91 987654321</span></a>
                        </div>

                        <!-- Top Header Content -->
                        <div class="top-header-meta d-flex align-items-center justify-content-between">
                            <div class="Company">
                                <a href="#"><i class="fa fa-location" aria-hidden="true"></i> <span>Company : Compsoft Technology</span></a>
                            </div>
                        </div>
                        <div class="top-header-meta d-flex align-items-center justify-content-between">
                            <!-- Login -->
                            <div class="login">
                                <a href="login.html"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                            </div>          
                            <!-- Cart -->
                            <?php
                                $count=0;
                                if(isset($_SESSION['cart']))
                                {
                                    $count=count($_SESSION['cart']);
                                }
                            ?>
                            
                            <div class="cart">
                                <a href="mycart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(<?php echo $count;?>)</span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- *** Navbar Area *** -->
    <div class="alazea-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="alazeaNav">

                    <!-- Nav Brand -->
                    <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt="" width="40%"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Navbar Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="addcart.php">Shop</a></li>
                                <li><a href="portfolio.php">Portfolio</a></li>
                                <li><a href="comment.php">Comment</a></li>
                            </ul>

                        </div>
                        <!-- Navbar End -->
                    </div>
                </nav>

                
                
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <!-- Top Breadcrumb Area -->
    <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
        <h2>Shop</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Shop Area Start ##### -->
<section class="shop-page section-padding-0-100">
    <div class="container">
        <div class="row">
            
            <!-- All Products Area -->
            <div class="col-12 col-md-8 col-lg-9">
                <div class="shop-products-area">
                    

                        <!-- Single Product Area 11 -->
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-product-area mb-4">
                                    <div class="product-img" style="position: relative;">
                                        <a href="#"><img src="img/bg-img/1-1.webp" alt=""></a></div> 
                                    
                                        <!-- Product Info (Moved to the Left) -->
                                        <div class="product-info text-left" style="position: absolute;">
                                            <a href="peacelilly.html">
                                                <p>Peace Lilly</p>
                                            </a>
                                            <h6>Rs. 250</h6>
                                        </div>
                                    
                                        <!-- Add to Cart Button (Moved to the Right) -->
                                        <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST">    
                                            <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                            <input type="hidden" name="Item_Name" value="Peace Lilly">
                                            <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST">    
                                        </div>
                                    
                                </div>
                            </div>
                            
                            

                            <!-- Single Product Area 12 -->                                                                   
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img" style="position: relative;">
                                        <a href="#"><img src="img/bg-img/1-2.webp" alt=""></a></div> 

                                         <!-- Product Info (Moved to the Left) -->
                                         <div class="product-info text-left" style="position: absolute;">
                                            <a href="jade.html">
                                                <p>Jade Plant Mini</p>
                                            </a>
                                            <h6>Rs. 250</h6>
                                        </div>
                                    
                                        <!-- Add to Cart Button (Moved to the Right) -->
                                        <div class="product-info text-right mt-1">
                                            <form action="manage_cart.php" method="POST"> 
                                            <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                            <input type="hidden" name="Item_Name" value="Jade Plant Mini">
                                            <input type="hidden" name="Price" value="250">
                                            </form action="manage_cart.php" method="POST"> 
                                        </div>                                        
                                    
                                </div>
                            </div>
                            

                            <!-- Single Product Area 13 -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img" style="position: relative;">
                                        <a href="#"><img src="img/bg-img/1-3.webp" alt=""></a></div> 

                                         <!-- Product Info (Moved to the Left) -->
                                         <div class="product-info text-left" style="position: absolute;">
                                            <a href="bamboo.html">
                                                <p>Bamboo Palm Plant</p>
                                            </a>
                                            <h6>Rs. 250</h6>
                                        </div>
                                    
                                        <!-- Add to Cart Button (Moved to the Right) -->
                                        <div class="product-info text-right mt-1">
                                            <form action="manage_cart.php" method="POST"> 
                                            <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                            <input type="hidden" name="Item_Name" value="Bamboo Palm Plant">
                                            <input type="hidden" name="Price" value="250">
                                            </form action="manage_cart.php" method="POST"> 
                                        </div>                                        
                                                                        
                                </div>
                            </div>
                        </div>

                    <div class="row">
                          <!-- Single Product Area 21 -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->

                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/2-1.webp" alt=""></a></div> 

                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="snake.html">
                                            <p>Snake Plant</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Snake Plant">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div> 
                                
                            </div>
                        </div>    

                        <!-- Single Product Area 22-->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/2-2.webp" alt=""></a></div> 

                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="syngonium.html">
                                            <p>Syngonium Pink Plant</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Syngonium Pink Plant">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div> 
                                                              
                            </div>
                        </div>

                        <!-- Single Product Area 23-->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/2-3.webp" alt=""></a></div> 

                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="areca.html">
                                            <p>Areca Palm Plant</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Areca Palm Plant">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div> 
                                                              
                            </div>
                        </div>
                    </div>           

                    <div class="row">
                        <!-- Single Product Area 31-->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/3-1.webp" alt=""></a></div> 

                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="lucky.html">
                                            <p>Lucky Bamboo Plant</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Lucky Bamboo Plant">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div> 
                                                         
                            </div>
                        </div>

                        <!-- Single Product Area 32-->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/3-2.webp" alt=""></a></div> 

                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="triostar.html">
                                            <p>Stromanthe Triostar Plant</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>     
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Stromanthe Triostar Plant">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div> 
                                                            
                            </div>
                        </div>
                                       
                        <!-- Single Product Area 33-->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/3-3.webp" alt=""></a></div> 

                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="peacock.html">
                                            <p>Peacock Plant</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>     
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Peacock Plant">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div> 
                                                            
                            </div>
                        </div>
                                        
                    <div class="row">
                        <!-- Single Product Area 41 -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/4-1.webp" alt=""></a></div> 

                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="rubber.html">
                                            <p>Rubber Plant</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                </div>     
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Rubber Plant">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div>                                                          
                            </div>
                        </div>

                        <!-- Single Product Area 42-->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/4-2.webp" alt=""></a></div> 

                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="bonsai.html">
                                            <p>Ficus Bonsai Plant</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>
                                   
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Ficus Bonsai Plant">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div>                                                          
                            </div>
                        </div>
                                        
                        <!-- Single Product Area 43-->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/4-3.webp" alt=""></a>
                                </div> 
                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="money.html">
                                            <p>Money Tree</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>
                                  
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Money Tree">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div>                                                          
                            </div>
                        </div>

                    <div class="row">
                        <!-- Single Product Area 51 -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/6-2.webp" alt=""></a>
                                </div> 
                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="alovera.html">
                                            <p>Aloe Vera</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>
                                    
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                    <form action="manage_cart.php" method="POST">
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Aloe Vera">
                                        <input type="hidden" name="Price" value="250">
                                    </form action="manage_cart.php" method="POST">    
                                    </div>                                                          
                            </div>
                        </div>
                        

                        <!-- Single Product Area 52-->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/5-2.webp" alt=""></a>
                                </div>     
                                
                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="mint.html">
                                            <p>Mint plant</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Mint plant">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div>                                                          
                            </div>
                        </div>
                                      
                        <!-- Single Product Area 53-->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/5-3.webp" alt=""></a>
                                </div> 
                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="Broken Heart.html">
                                            <p>Broken Heart Plant</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>
                                    
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Broken Heart Plant">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div>                                                          
                            </div>
                        </div>

                    <div class="row">
                        <!-- Single Product Area 61 -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/6-1.webp" alt=""></a>
                                </div> 
                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="tulsi.html">
                                            <p>Tulsi Plant</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>
                                    
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Tusli Plant">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div>                                                          
                            </div>
                        </div>
                                      
                        <!-- Single Product Area 62-->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/5-3.webp" alt=""></a>
                                </div> 
                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="jasmine.html">
                                            <p>Jasmine</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>
                                    
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Jasmine">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div>                                                          
                            </div>
                        </div>

                        <!-- Single Product Area 63-->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-area mb-50">
                                <!-- Product Image -->
                                <div class="product-img" style="position: relative;">
                                    <a href="#"><img src="img/bg-img/5-3.webp" alt=""></a>
                                </div> 
                                     <!-- Product Info (Moved to the Left) -->
                                     <div class="product-info text-left" style="position: absolute;">
                                        <a href="ashwagandha.html">
                                            <p>Ashwagandha</p>
                                        </a>
                                        <h6>Rs. 250</h6>
                                    </div>
                                    
                                
                                    <!-- Add to Cart Button (Moved to the Right) -->
                                    <div class="product-info text-right mt-1">
                                        <form action="manage_cart.php" method="POST"> 
                                        <button type="submit" name="Add_to_Cart" class="btn btn-info mb-1" style="background-color: green; border:white;">Add to cart</button>
                                        <input type="hidden" name="Item_Name" value="Ashwagandha Plant">
                                        <input type="hidden" name="Price" value="250">
                                        </form action="manage_cart.php" method="POST"> 
                                    </div>                                                          
                            </div>
                        </div>                    

                    <!-- Pagination -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Shop Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget">
                        <div class="footer-logo mb-30">
                            <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                        <p>Make sure you celebrate the worlds plants and help to conserve them!</p>
                        <div class="social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget">
                        <div class="widget-title">
                            <h5>QUICK LINK</h5>
                        </div>
                        <nav class="widget-nav">
                            <ul>
                                <li><a href="#">Purchase</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Payment</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Return</a></li>
                                <li><a href="#">Advertise</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Orders</a></li>
                                <li><a href="#">Policities</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget">
                        <div class="widget-title">
                            <h5>CONTACT</h5>
                        </div>

                        <div class="contact-inform action="manage_cart.php" method="POST"ation">
                            <p><span>Address:</span> Bangalore</p>
                            <p><span>Phone:</span> +91 987654321</p>
                            <p><span>Email:</span> leafnowofficial@gmail.com</p>
                            <p><span>Open hours:</span> Mon - Fri: 9 AM to 9 PM</p>
                            <p><span>Happy hours:</span> Sat: 2 PM to 4 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom Area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
                <!-- Copywrite Text -->
                <div class="col-12 col-md-6">
                    <div class="copywrite-text">
                        <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
                <!-- Footer Nav -->
                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <nav>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="addcart.php">Shop</a></li>
                                <li><a href="portfolio.php">Portfolio</a></li>
                                <li><a href="comment.php">Comment</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>
</body>
</html>