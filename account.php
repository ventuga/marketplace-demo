<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="utf-8">
  <title>Ventuga Marketplace -  User Account</title>

  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  
  <link href="css/vendor/material-icons.min.css" rel="stylesheet" media="screen">

  
   <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?u8vidh">

  
  <link href="css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  
  <link href="css/theme.min.css" rel="stylesheet" media="screen">

  
  <script src="js/vendor/page-preloading.js"></script>
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

      
      <div class="featured-image" style="background-image: url(img/account.jpg);"></div>

      
      <section class="container padding-top-3x padding-bottom-2x">
        <h1 class="mobile-center">Welcome, <span class="text-semibold">Demo User</span></h1>
        <div class="row padding-top">
          <div class="col-sm-9 padding-bottom-2x">
            
            <ul class="nav-tabs mobile-center" role="tablist">
              <li class="active"><a href="#profile" role="tab" data-toggle="tab">
                <i class="material-icons person"></i>
                Profile
              </a></li>
              <li><a href="#orders" role="tab" data-toggle="tab">
                <i class="material-icons shopping_cart"></i>
                My Transactions
              </a></li>
              <li><a href="#items" role="tab" data-toggle="tab">
                <i class="material-icons home"></i>
                My Items
              </a></li>
            </ul>

            
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane transition fade scale in active" id="profile">
                <form method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-element">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" class="form-control" value="Demo">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-element">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" class="form-control" value="User">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-element">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" value="team@ventu.ga">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-element">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" class="form-control" value="+1 123 456 789 01">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-element">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" value="abracadabra">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-element">
                        <label for="password_confirm">Confirm Password</label>
                        <input type="password" id="password_confirm" class="form-control" value="abracadabra">
                      </div>
                    </div>
                  </div>
                  <div class="form-element">
                    <label for="address">ETH Address</label>
                    <input type="text" id="address" class="form-control" value="0xFFFFFFFFFFFFFFFFFFFFF" disabled>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 text-right mobile-center">
                      <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
              <div role="tabpanel" class="tab-pane transition fade scale" id="orders">
                <div class="table-responsive">
                  <table>
                    <thead>
                      <tr>
                        <th>Order #</th>
                        <th>Date Purchased</th>
                        <th>Status</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">TXID-000003</a></td>
                        <td>December 17th, 2017</td>
                        <td><span class="text-warning">Awaiting Seller Approval...</span></td>
                        <td>1200 VNG</td>
                      </tr>
                      <tr>
                        <td><a href="#">TXID-000002</a></td>
                        <td>December 17th, 2017</td>
                        <td><span class="text-danger">Buyer Cancelled</span></td>
                        <td>1000 VNG</td>
                      </tr>
                      <tr>
                        <td><a href="#">TXID-000001</a></td>
                        <td>December 17th, 2017</td>
                        <td><span class="text-success">Completed</span></td>
                        <td>1000 VNG</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane transition fade scale" id="items">
                <div class="row">
                  
                  <div class="col-md-4 col-sm-6">
                    <div class="shop-item">
                      <div class="shop-thumbnail">
                        <a href="shop-single.html" class="item-link"></a>
                        <img src="img/shop/archive.png" alt="Shop item">
                        <div class="shop-item-tools">
                          <a href="#" class="add-to-cart">
                            <em>View</em>
                            <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                              <path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class="shop-item-details">
                        <h3 class="shop-item-title"><a href="item.php">no data</a></h3>
                        <span class="shop-item-price">
                          0 VNG
                        </span>
                      </div>
                    </div>
                  </div>
                    
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-sm-3 padding-bottom-2x">
            <aside class="mobile-center">
              <h3>Your trust score:</h3>
              <h3><span class="text-semibold">12</span> <span class="h5">points</span></h3>
              <p class="text-sm text-gray">Low score? You can improve your AthenAI trust score by completing more transactions successfully.</p>
              <a href="shop-sidebar-left.html" class="btn btn-default btn-ghost icon-left btn-block">
                <i class="material-icons arrow_back"></i>
                Go to Listings
              </a>
              <a href="#" class="btn btn-primary btn-block waves-effect waves-light space-top-none">What's this?</a>
            </aside>
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
                        <a href="mailto:team@ventu.ga" class="sb-mail" data-toggle="tooltip" data-placement="top" title="Email">
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
