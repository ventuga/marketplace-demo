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
    <title>Ventuga Marketplace Demo | Item 1</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Material Icons -->
  <link href="css/vendor/material-icons.min.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?u8vidh">

  <!-- Bootstrap -->
  <link href="css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- Theme Styles -->
  <link href="css/theme.min.css" rel="stylesheet" media="screen">

  <!-- Page Preloading -->
  <script src="js/vendor/page-preloading.js"></script>

  <!-- Modernizr -->
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
                
                if($connectionStatus == "ok") {
                    echo "<div class=\"connectionStatus\" style=\"display: block !important\"> <h5 style=\"display: inline-block\">Connection Status</h5> <img src=\"img/status/green.png\" alt=\"Connected\" style=\"height: auto; !important; width: 10px !important; vertical-align: middle; display: inline-block; margin: 0px 10px\"> <p style=\"font-size: 14px;\">Verified connection to offical server, using <code>$servername</code>.</p> </div>";
                }
                
                if($connectionStatus == "error") {
                    echo "<div class=\"connectionStatus\" style=\"display: block !important\"> <h5 style=\"display: inline-block\">Connection Status</h5> <img src=\"img/status/red.png\" alt=\"Connection Error\" style=\"height: auto; !important; width: 10px !important; vertical-align: middle; display: inline-block; margin: 0px 10px\"> <p style=\"font-size: 14px;\"><code>$connectionErrorReason</code>.</p> </div>";
                }
                
                
                ?>
            </div>
                    
        </header>

        <main class="content-wrapper">

            <section class="fw-section bg-gray padding-top-3x">

                <a href="#" class="page-nav page-prev">
                    <span class="page-preview">
            <img src="img/pager/01.jpg" alt="Page">
          </span> &mdash; Prev
                </a>
                <a href="#" class="page-nav page-next">
                    <span class="page-preview">
            <img src="img/pager/02.jpg" alt="Page">
          </span> Next &mdash;
                </a>
                <div class="container padding-top">

                    <div class="product-gallery">

                        <ul class="product-gallery-preview">
                            <li id="preview01" class="current"><img src="img/shop/item.png" alt="Product"></li>
                        </ul>

                        <ul class="product-gallery-thumblist">
                            <li>
                                <a href="#preview01">
                                    <img src="img/shop/item.png" alt="Product">
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </section>

            <section class="fw-section bg-gray padding-bottom-3x">
                <div class="container">
                    <div class="product-info padding-top-2x text-center">
                        <h1 class="h2 space-bottom-half">Sample Item</h1>
                        <h2>1 VNG</h2>
                        <p class="text-sm text-gray">Short description from uploader goes here. Lorem ipsum dolor sit amet.</p>
                        <div class="product-meta">
                            <div class="product-sku">
                                <strong>AthenAI Trust Score: </strong>
                                <span>12</span>
                            </div>
                            <div class="product-category">
                                <strong>Category: </strong>
                                <a href="#">ICO Whitelists</a>
                            </div>
                        </div>
                        <div class="product-tools shop-item">
                            
                            <a href="#" class="add-to-cart">
                                <em>Begin Transaction</em>
                                <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                    <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container padding-top-2x">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">

                        <ul class="nav-tabs text-center" role="tablist">
                            <li class="active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
                            <li><a href="#additional" role="tab" data-toggle="tab">Additional Info</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane transition fade in active" id="description">
                                <div class="row space-top">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam hic totam, tempore quos dicta voluptate tempora ex voluptatum amet, veniam assumenda magnam eveniet eius reiciendis, ab necessitatibus quis iure libero.</p>
                                        <p>Alias commodi aspernatur quo illo dolor voluptatem animi ipsum laudantium similique blanditiis, molestias facilis vitae harum minima obcaecati corrupti quibusdam minus modi.</p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane transition fade" id="additional">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table-no-border">
                                            <tr>
                                                <th>File Type</th>
                                                <td>PDF</td>
                                            </tr>
                                            <tr>
                                                <th>File Size</th>
                                                <td>28 kb</td>
                                            </tr>
                                            <tr>
                                                <th>AthenAI Trust Score</th>
                                                <td>12</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table-no-border">
                                            <tr>
                                                <th>Uploader</th>
                                                <td>System</td>
                                            </tr>
                                            <tr>
                                                <th>Upload Date</th>
                                                <td>10/12/2017</td>
                                            </tr>
                                            <tr>
                                                <th>Listing Expiration</th>
                                                <td>15/12/2017</td>
                                            </tr>
                                        </table>
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
    <script src="js/scripts.js"></script>

</body>

</html>