<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags must come first in the head; any other head content must come after these tags -->    <title>Cart</title>

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
                    <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt="" width="40%"></a>

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
        <h2>My Cart</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-9 " >
            <table class="table">
            <thead class="text-center">
                <tr>
                <th scope="col">Serial No.</th>
                <th scope="col">Item Name</th>
                <th scope="col">Item Price</th>
                <th scope="col">Quantity</th>
                <th scope="col"> </th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                    $total=0;
                    if(isset($_SESSION['cart']))
                    {
                        foreach($_SESSION['cart'] as $key=>$value)
                        {
                            $sr=$key+1;
                            $total=$total+$value['Price'];
                            echo"
                            <tr>
                                <td>$sr</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]</td>
                                <td><input type='number' class='text-center' value='$value[Quantity]' min='1' max='10'></td>
                                <td>
                                    <form action='manage_cart.php' method='POST'>
                                        <button name='Remove_Item' class='btn btn-outline-danger btn-sm'>REMOVE</button>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                </td>
                            </tr>
                            ";
                        }
                    }
                ?>
            </tbody>
            </table>
        </div>

        <div class="col-lg-3 ">
            <div class="border bg-light rounded p-4">
            <h4>Total:</h4>
            <h5 class="test-right"><?php echo $total;?></h5>
            <br>
            <form>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="cashOnDelivery" checked>
                <label class="form-check-label" for="cashOnDelivery">
                    Cash on Delivery
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="onlinePayment">
                <label class="form-check-label" for="onlinePayment">
                    Online Payment<a href="donate.html"> (Click here)</a>
                </label>
            </div>
            <br>
            <button class="btn btn-primary btn-block"><a href="makepurchase.html">Make Purchase</a></button>
            </form>   
        </div>
    </div>
</div>  






    
</body>
</html>