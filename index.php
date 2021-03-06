<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GW Libraries</title><!-- your page title -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- important! -->
        <meta name="description" content=""><!-- optional -->
        <meta name="author" content=""><!-- optional -->
            
        <!-- styles -->
        <!-- these are the stylesheets: first two grab the Bootstrap cdn and Font Awesome! cdn stylesheets, the other two are for the Library theme -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="all">
        <!-- Font Awesome! http://fontawesome.io/get-started -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="http://assets.library.gwu.edu/app-assets/libheader/2_003/css/libheader7_lite.css" rel="stylesheet" media="all">
        <link href="http://assets.library.gwu.edu/app-assets/libheader/2_003/css/libheader7_lite_bootswatch.css" rel="stylesheet" media="all">
	    <!-- print styles are included in base libheader7_lite.css --> 
  
        <!-- js links are at the bottom of the page -->
            
        <!-- IE css mods and HTML5 shim, for IE6-8 support of HTML5 elements --><!-- important! -->
        <!--[if lt IE 9]>
        <link href="css/libheader7_lite_ie.css" rel="stylesheet">
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
                                
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="img/apple-touch-icon-iphone.png"><!-- optional, and this is just the min version -->

        <!-- Google Analytics -->
        <!--
        <script>
          var dnt = navigator.doNotTrack;
          if (dnt != 1) {
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-xxxxxx-x', 'auto');
            ga('create', 'UA-12345678-1', 'auto', {'name': 'aggregate'});  // sets aggregated Analytics account.
            ga('send', 'pageview');
            ga('aggregate.send', 'pageview'); // Send page view for aggregated Analytics account.
          }
        </script>
        -->

        <style>
        <?php 
          if (!$_GET["wrlc"] || $_GET["wrlc"] == "up") {
            echo ".wrlc {display:block;}";
            echo ".no-wrlc {display:none;}";
          }
          else {
            echo ".wrlc {display:none;}";
            echo ".no-wrlc {display:block;}";
          }
        ?>
        #bullets ul {margin-top: 2em;}
        #bullets ul li {margin-bottom: 1em;}
        .sidebar {
          padding: 0 1em 1em;
          background: #DDD;
          border-radius: 10px;
          margin-top: 3em;
        }
        @media screen and (min-width:992px) {
          .md-show {display:inline;}
          .md-hide {display:none;}
        }
        @media screen and (max-width:991px) {
          .md-show {display:none;}
          .md-hide {display:inline;}
          .sidebar {padding-top:.1em; margin-top:inherit; margin-left:1em; margin-right:1em;}
        }
        </style>
        
    </head>
    
    <body>
        <header class="navbar-fixed-top"><!-- this is the Libsite7 Lite Header -->
            <div id="libheader-container">
                <div id="libheader" class="container">
                    <div class="libheader-logo hide-lo"><a href="http://www.gwu.edu" target="_blank" title="GWU website"><img src="http://assets.library.gwu.edu/app-assets/libheader/2_003/img/gwheaderlogo.png" alt="logo: The George Washington University" /><span class="sr-only">GWU Home Page</span></a></div>
                    <div class="libheader-liblink"><a href="http://library.gwu.edu" target="_blank" title="GW Libraries website">GW Libraries</a></div>

                    <!-- optional links can go here (note: use short text, test it doesn't bump into the GW logo) -->
                    <!--<div class="libheader-link"><a href="#" target="_blank" title="">Placeholder Link 1</a></div>-->
                    <!-- this is an optional 'bullet' to place between links -->
                    <!--<div class="bullet">&bull;</div>
                    <div class="libheader-link"><a href="#" target="_blank" title="">Placeholder Link 2</a></div>-->
                    <!-- end optional links -->

                    <!-- optional bootstrap user icons, example placement -->
                    <!--<div class="libheader-icon">
                        <i class='icon-off icon-white'></i>&nbsp;<a href="/logout/">logout</a>
                    </div>
                    <div class="libheader-icon">
                        <i class='icon-cog icon-white'></i>&nbsp;<a href="/change_password/">settings</a>
                    </div>
                    <div class="libheader-icon">
                        <i class='icon-user icon-white'></i>&nbsp;guest
                    </div>-->
                    <!-- end optional bootstrap user icons -->
                </div>
            </div>
        </header><!-- end Libsite7 Lite Header -->
        
        <!-- page content: put your content inside the <article> tag and customize/format with the Bootstrap scaffolding: http://twitter.github.com/bootstrap/scaffolding.html -->
        <article class="libsite-container container">
            
            <div class="row">
                <div class="col-md-7" style="margin-bottom:3em;"> <!-- this is a 'content' column that takes up 8 of the 12 columns within this content area -->
                    <h1>Our Site is Down!</h1>
                    <p>The GW Libraries website is temporarily unavailable. We are aware of the problem and are working on a solution.</p>
                    <p>In the meantime, many of our tools and resources can be accessed directly with the links <span class="md-show">to the right</span><span class="md-hide">below</span>.</p>
                    <div id="bullets">
                    <ul>
                      <span class="no-wrlc"><li>With our proxy server down you will need use the GW VPN for remote access to resources: <a href="http://it.gwu.edu/vpn">http://it.gwu.edu/vpn</a></li></span>
                      <li>For 3D printing or equipment reservations, email lithelp@gwu.edu</li>
                      <li>You can reach us directly at 202-994-6558 or gelman@gwu.edu</li>
                      <li>If you need technical assistance, please contact LIT at  lithelp@gwu.edu and 202-994-8278</li> 
                    </ul>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1 sidebar"> <!-- this is a 'sidebar' column that takes up 4 of the 12 columns within this content area -->
                    <h2>Library Resources</h2>
                    
                    <p class="wrlc"><a href="http://findit.library.gwu.edu/search">Catalog</a></p>
                    <p class="wrlc"><a href="http://catalog.wrlc.org">Classic Catalog</a></p>
                    <p class="no-wrlc"><a href="http://www.worldcat.org/">WorldCat Catalog</a></p>
                    <p><a href="http://gw.summon.serialssolutions.com">ArticlesPlus</a></p>
                    <p><a href="http://libguides.gwu.edu">Research Guides</a></p>
                    <p><a href="http://libguides.gwu.edu/databases">Subject Databases</a></p>
                    <p class="wrlc"><a href="https://rooms.library.gwu.edu/">Study Room Reservations<a></p>
                
                </div>
            </div>
            
        </article> <!-- /container -->
        <!-- end page content -->
        
        <footer class="navbar-fixed-bottom"><!-- the Libsite7 Lite Footer -->
            <div id="libfooter-container">
                <div id="libfooter" class="container">
                    <div class="libfooter-text">
                        <div id="footer-contact">
                            <span class="address"><a href="http://library.gwu.edu" target="_blank" title="GW Libraries Website">GW Libraries</a> &#8226; 2130 H Street NW &#8226; Washington DC 20052</span> &#8226; <span class="tel">202.994.6558</span> &#8226; <a href="mailto:gelman@gwu.edu" target="_blank" title="">gelman@gwu.edu</a>
                        </div>
                        <!--<div id="footer-utility">
                            <span><a href="https://library.gwu.edu/accessibility">Accessibility</a></span>
                            <span> &#8226; </span>
                            <span><a href="https://library.gwu.edu/contact">Contact Us</a></span>
                            <span> &#8226; </span>
                            <span><a href="#">Utility Link 3</a></span>
                        </div>-->
                    </div>
                </div>
            </div>
        </footer><!-- end Libsite7 Lite Footer -->
        
        <!-- javascript placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
    </body>
</html>
