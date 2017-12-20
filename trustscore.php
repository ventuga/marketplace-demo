<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ventuga Marketplace - What is a trust score?</title>

    
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

            <section class="container padding-top-3x padding-bottom-3x">
                <h1>What is a trust score?</h1>
                <div class="row padding-top">
                    <div class="col-sm-6">
                        <div class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <a class="panel-title" data-toggle="collapse" href="#panel1">
                    How does my trust score affect me?
                  </a>
                                </div>
                                <div id="panel1" class="panel-collapse collapse in">
                                    <div class="panel-body text-gray">
                                        Your personal trust score is only used to verify transactions within the Ventuga Network. For example, a low trust score has a higher chance of the transaction requiring manual verification
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <a class="panel-title" data-toggle="collapse" href="#panel2">
                    Why does my transaction say "Awaiting manual verification - click here to accept"?
                  </a>
                                </div>
                                <div id="panel2" class="panel-collapse collapse in">
                                    <div class="panel-body text-gray">
                                        This occurs when the average transaction score (the average of buyers trust score, sellers trust score and the file's trust score) is low. This is to protect you from potential scams. When this happens, Ventuga Marketplace will ask you to verify that you'd like to proceed with the transaction. You have the chance to talk to the seller/buyer and discuss potential problems. If you accept, the transaction will go through successfully, however if one party decides to cancel the transaction, the funds will be returned/file will be deleted.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <a class="panel-title" data-toggle="collapse" href="#panel3">
                    How do you generate my trust score?
                  </a>
                                </div>
                                <div id="panel3" class="panel-collapse collapse in">
                                    <div class="panel-body text-gray">
                                        A smart AI called AthenAI generates a user's trust score by using a wide number of variables. This includes but is not limited to: Geographical location, IP address, number of successful transactions, Operating System and network speed. Data is not saved, and is only used once to generate your base score. Once you have your base score tied to your ETH address, you can either raise or lower your trust score by completing transactions.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <a class="panel-title" data-toggle="collapse" href="#panel4">
                    Should I buy an item if it advertises a low trust score?
                  </a>
                                </div>
                                <div id="panel4" class="panel-collapse collapse in">
                                    <div class="panel-body text-gray">
                                        That decision is up to you to make. We can't guarentee that all files are trustworthy, and obviously a low trust score further contributes to that conclusion. You always have the chance to talk to the seller and ask questions. Refunds can also be made if a transaction does not work out.
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