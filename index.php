<?php
// Marketplace verification key
$clientkey = "M3kwNXgpkunMsmPJkIgtaQJmicrhc";
// API key
$apikey = "3m0Y2Oru02Fty6k67o3G0es0WwhazDa2emOchloM";

// IP of the server we want to connect to
$apiserver = "https://api.ventu.ga";

// Connection!

$ch = curl_init();   
curl_setopt($ch, CURLOPT_URL, "$apiserver/api.php?action=verify&apikey=$apikey");  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
curl_setopt($ch, CURLOPT_TIMEOUT, 2);
// might change if using slow api
$serverkey = curl_exec($ch);  
curl_close($ch); 

// Check keys
if($serverkey == $clientkey) {
    $connectionStatus = "ok";
} else {
    $connectionStatus = "error";
    $connectionErrorReason = "Could not verify server keys. Aborting connection.";
}

// Get server name
$ch = curl_init();   
curl_setopt($ch, CURLOPT_URL, "$apiserver/api.php?action=getname&apikey=$apikey");  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
curl_setopt($ch, CURLOPT_TIMEOUT, 2);
// might change if using slow api
$servername = curl_exec($ch);  
curl_close($ch); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ventuga Marketplace Demo</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link href="css/vendor/material-icons.min.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?u8vidh">

    <link href="css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

    <link href="css/theme.min.css" rel="stylesheet" media="screen">

    <script src="js/vendor/page-preloading.js"></script>

    <script src="js/vendor/modernizr.custom.js"></script>
</head>

<body class="page-preloading">

    <div class="page-preloader">
        <div class="preloader">
            <img src="img/preloader.gif" alt="Preloader">
        </div>
    </div>

    <div class="page-wrapper">

        <header class="navbar">

            <div class="navbar-header">

                <a href="index.html" class="site-logo visible-desktop">
         Ventuga
          <span class="text-gray">//</span>
          <span>Demo</span>
        </a>
                <a href="index.html" class="site-logo visible-mobile">
          Ventuga <span>Demo</span>
        </a>

                <a href="#" class="mobile-menu-toggle"><i class="material-icons menu"></i></a>
            </div>

            <div class="mobile-menu-wrapper">

                <div class="toolbar">
                    <a href="account.html"><i class="material-icons person"></i></a>

                </div>

                <nav class="main-navigation">
                    <ul class="menu">
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">All Items</a>
                        </li>
                    </ul>
                </nav>
                <?php
                
                if($connectionStatus = "ok") {
                    echo "<div class=\"connectionStatus\" style=\"display: block !important\"> <h5 style=\"display: inline-block\">Connection Status</h5> <img src=\"img/status/green.png\" alt=\"Connected\" style=\"height: auto; !important; width: 10px !important; vertical-align: middle; display: inline-block; margin: 0px 10px\"> <p style=\"font-size: 14px;\">Verified connection to offical server, using <code>$servername</code>.</p> </div>"
                }
                
                if($connectionStatus = "error") {
                    echo "<div class=\"connectionStatus\" style=\"display: block !important\"> <h5 style=\"display: inline-block\">Connection Status</h5> <img src=\"img/status/red.png\" alt=\"Connection Error\" style=\"height: auto; !important; width: 10px !important; vertical-align: middle; display: inline-block; margin: 0px 10px\"> <p style=\"font-size: 14px;\"><code>$connectionErrorReason</code>.</p> </div>"
                }
                
                
                ?>
            </div>
                    
        </header>

        <main class="content-wrapper">

            <section class="container-fluid padding-top-3x">

            
                <div class="row padding-top">

                    <div class="col-sm-12">

                        <ul class="nav-tabs text-center" role="tablist">
                            <li class="active"><a href="#all" role="tab" data-toggle="tab">All Items</a></li>
                        </ul>

                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane transition fade scale in active" id="all">
                                <div class="row space-top-half">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="shop-item">
                                            <div class="shop-thumbnail">
                                                <a href="item.php" class="item-link"></a>
                                                <img src="img/shop/txt.png" alt="Shop item">
                                                <div class="shop-item-tools">
                                                    <a href="item.php?id=$itemid" class="add-to-cart">
                                                        <em>View item</em>
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="shop-item-details">
                                                <h3 class="shop-item-title"><a href="item.php">itemName</a></h3>
                                                <span class="shop-item-price">
                          $itemPrice
                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="shop-item">
                                            <div class="shop-thumbnail">
                                                <a href="item.php" class="item-link"></a>
                                                <img src="img/shop/txt.png" alt="Shop item">
                                                <div class="shop-item-tools">
                                                    <a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                        <i class="material-icons favorite_border"></i>
                                                    </a>
                                                    <a href="#" class="add-to-cart">
                                                        <em>Add to Cart</em>
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="shop-item-details">
                                                <h3 class="shop-item-title"><a href="item.php">itemName</a></h3>
                                                <span class="shop-item-price">
                          $itemPrice
                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="shop-item">
                                            <div class="shop-thumbnail">
                                                <a href="item.php" class="item-link"></a>
                                                <img src="img/shop/txt.png" alt="Shop item">
                                                <div class="shop-item-tools">
                                                    <a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                        <i class="material-icons favorite_border"></i>
                                                    </a>
                                                    <a href="#" class="add-to-cart">
                                                        <em>Add to Cart</em>
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="shop-item-details">
                                                <h3 class="shop-item-title"><a href="item.php">itemName</a></h3>
                                                <span class="shop-item-price">
                          $itemPrice
                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="shop-item">
                                            <div class="shop-thumbnail">
                                                <a href="item.php" class="item-link"></a>
                                                <img src="img/shop/txt.png" alt="Shop item">
                                                <div class="shop-item-tools">
                                                    <a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                        <i class="material-icons favorite_border"></i>
                                                    </a>
                                                    <a href="#" class="add-to-cart">
                                                        <em>Add to Cart</em>
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="shop-item-details">
                                                <h3 class="shop-item-title"><a href="item.php">itemName</a></h3>
                                                <span class="shop-item-price">
                          $itemPrice
                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="shop-item">
                                            <div class="shop-thumbnail">
                                                <a href="item.php" class="item-link"></a>
                                                <img src="img/shop/txt.png" alt="Shop item">
                                                <div class="shop-item-tools">
                                                    <a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                        <i class="material-icons favorite_border"></i>
                                                    </a>
                                                    <a href="#" class="add-to-cart">
                                                        <em>Add to Cart</em>
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="shop-item-details">
                                                <h3 class="shop-item-title"><a href="item.php">itemName</a></h3>
                                                <span class="shop-item-price">
                          $itemPrice
                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="shop-item">
                                            <div class="shop-thumbnail">
                                                <a href="item.php" class="item-link"></a>
                                                <img src="img/shop/txt.png" alt="Shop item">
                                                <div class="shop-item-tools">
                                                    <a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                        <i class="material-icons favorite_border"></i>
                                                    </a>
                                                    <a href="#" class="add-to-cart">
                                                        <em>Add to Cart</em>
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="shop-item-details">
                                                <h3 class="shop-item-title"><a href="item.php">itemName</a></h3>
                                                <span class="shop-item-price">
                          $itemPrice
                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="shop-item">
                                            <div class="shop-thumbnail">
                                                <a href="item.php" class="item-link"></a>
                                                <img src="img/shop/txt.png" alt="Shop item">
                                                <div class="shop-item-tools">
                                                    <a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                        <i class="material-icons favorite_border"></i>
                                                    </a>
                                                    <a href="#" class="add-to-cart">
                                                        <em>Add to Cart</em>
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="shop-item-details">
                                                <h3 class="shop-item-title"><a href="item.php">itemName</a></h3>
                                                <span class="shop-item-price">
                          $itemPrice
                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="shop-item">
                                            <div class="shop-thumbnail">
                                                <a href="item.php" class="item-link"></a>
                                                <img src="img/shop/txt.png" alt="Shop item">
                                                <div class="shop-item-tools">
                                                    <a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                        <i class="material-icons favorite_border"></i>
                                                    </a>
                                                    <a href="#" class="add-to-cart">
                                                        <em>Add to Cart</em>
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="shop-item-details">
                                                <h3 class="shop-item-title"><a href="item.php">itemName</a></h3>
                                                <span class="shop-item-price">
                          $itemPrice
                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane transition fade scale" id="onsale">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="shop-item">
                                            <div class="shop-thumbnail">
                                                <span class="shop-label text-danger">Sale</span>
                                                <a href="#" class="item-link"></a>
                                                <img src="img/shop/txt.png" alt="Shop item">
                                                <div class="shop-item-tools">
                                                    <a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                        <i class="material-icons favorite_border"></i>
                                                    </a>
                                                    <a href="#" class="add-to-cart">
                                                        <em>Add to Cart</em>
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="shop-item-details">
                                                <h3 class="shop-item-title"><a href="#">itemName</a></h3>
                                                <span class="shop-item-price">
                          <span class="old-price">$sale.OldPrice</span> $sale.NewPrice
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="shop-item">
                                            <div class="shop-thumbnail">
                                                <span class="shop-label text-danger">Sale</span>
                                                <a href="#" class="item-link"></a>
                                                <img src="img/shop/txt.png" alt="Shop item">
                                                <div class="shop-item-tools">
                                                    <a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                        <i class="material-icons favorite_border"></i>
                                                    </a>
                                                    <a href="#" class="add-to-cart">
                                                        <em>Add to Cart</em>
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="shop-item-details">
                                                <h3 class="shop-item-title"><a href="#">itemName</a></h3>
                                                <span class="shop-item-price">
                          <span class="old-price">$sale.OldPrice</span> $sale.NewPrice
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="shop-item">
                                            <div class="shop-thumbnail">
                                                <span class="shop-label text-danger">Sale</span>
                                                <a href="#" class="item-link"></a>
                                                <img src="img/shop/txt.png" alt="Shop item">
                                                <div class="shop-item-tools">
                                                    <a href="#" class="add-to-whishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                        <i class="material-icons favorite_border"></i>
                                                    </a>
                                                    <a href="#" class="add-to-cart">
                                                        <em>Add to Cart</em>
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="shop-item-details">
                                                <h3 class="shop-item-title"><a href="#">itemName</a></h3>
                                                <span class="shop-item-price">
                          <span class="old-price">$sale.OldPrice</span> $sale.NewPrice
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="footer">
                <div class="column">
                    <p class="text-sm">Need support?</p>
                    <div class="social-bar text-center space-bottom">
                        <a href="https://discord.gg/XMyEte6" class="sb-discord" data-toggle="tooltip" data-placement="top" title="Discord">
                            <i class="socicon-discord"></i>
                        </a>
                        <a href="mailto:ventuga@protonmail.com" class="sb-mail" data-toggle="tooltip" data-placement="top" title="Email">
                            <i class="socicon-mail"></i>
                        </a>
                    </div>
                    <p class="copyright">&copy; 2017-2018 Ventuga Network</p>
                </div>

            </footer>
        </main>

    </div>

    <script src="js/vendor/jquery-2.1.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/smoothscroll.js"></script>
    <script src="js/vendor/velocity.min.js"></script>
    <script src="js/vendor/waves.min.js"></script>
    <script src="js/vendor/icheck.min.js"></script>
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/vendor/magnific-popup.min.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>