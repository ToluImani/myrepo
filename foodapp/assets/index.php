<?php

//change timezone
date_default_timezone_set("America/Toronto");
echo "The time is " . date("h:i:sa");
$date = date("Y-m-d H:i:s", time());
//timestamp
$timestamp = date("H");

if (($timestamp > 9) and ($timestamp < 22)) 
	#code to check if time is ealier than 9 to 22 as OPEN andvice versa..
	$status = "<span class='text-success'>We are OPEN </span>";

else
	$status = "<span class='text-close text-danger'>We are CLOSED </span>";

//I added $staus to times for open or closed so customers know when the store is open automatically

$htm = "

<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
   <head>
       
      <meta http-equiv='Content-type' content='text/html; charset=utf-8' />
      <meta http-equiv='X-UA-Compatible' content='IE=edge' />
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
      <meta name='description' content='' />
      <meta name='keywords' content='' />
      <link href='images/favicon.ico' rel='shortcut icon' type='image/ico' />
      <title>Restaurants - Eatethnic</title>
      <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css' id='bootstrap-css' />
      <link href='css/font-awesome.min.css?ver=2.1.1' rel='stylesheet' type='text/css' id='font-awesome-css' />
      <link href='css/select2.css?ver=2.1.1' rel='stylesheet' type='text/css' id='select2-css' />
      <link href='css/select2-bootstrap.css?ver=2.1.1' rel='stylesheet' type='text/css' id='select2-bootstrap-css' />
      <link href='css/jquery.raty.css?ver=2.1.1' rel='stylesheet' type='text/css' id='jquery-raty-css' />
      <link href='css/fonts.css?ver=2.1.1' rel='stylesheet' type='text/css' id='fonts-css' />
      <link href='css/stylesheet.css?ver=2.1.1' rel='stylesheet' type='text/css' id='stylesheet-css' />
      <link href='assets/js-image-slider.css' rel='stylesheet' type='text/css' />
      <link href='assets/css/owl.carousel.min.css' rel='stylesheet' type='text/css' />
      <link href='assets/css/owl.theme.default.min.css' rel='stylesheet' type='text/css' />
      
       
      <script src='assets/js-image-slider.js' type='text/javascript'></script>
      <link href='assets/generic.css' rel='stylesheet' type='text/css' />
      <style type='text/css'>body {font-family: 'Oxygen',Arial,sans-serif;font-size: 13px;font-weight: normal;font-style: normal;color: #333333;}.menu-name, .panel-default > .panel-heading {color: #333333;}.text-muted { color: #7a7a7a;}body, #page-wrapper {background-color: #ffffff;}.partial .local-box-fluid, .partial .local-box-fluid .panel { background-color: #ed561a; border-color: #ed561a}.step-item .icon i { color: #ed561a; border-color:#ed561a;}.newsletter-subscribe { background-color: #ed561a; color:#333333}.nav-tabs-line > li.active > a, .nav-tabs-line > li.active > a:hover, .nav-tabs-line > li.active > a:focus, .nav-tabs-line > li.open a, .nav-tabs-line > li > a:hover, .nav-tabs-line > li > a:focus,.nav-tabs-line > li.open a, .nav-tabs-line > li:hover, .nav-tabs-line > li:focus, .nav-tabs-line > li.active, .nav-tabs-line > li.active:hover, .nav-tabs-line > li.active:focus { border-bottom-color: #ed561a;}.newsletter-subscribe { color:#333333}#main-header, #main-header .navbar-collapse, .modal-header {background-color: #ed561a;}#main-header .dropdown-menu > li > a, .modal-header { color: #ffffff;}#main-header .dropdown-menu { background-color: #ed561a;}#main-header .logo img {height: 40px !important;}#main-header .logo {padding-top: 10px;padding-bottom: 10px;}#main-header .navbar-nav > li > a {font-family: 'Oxygen',Arial,sans-serif;font-size: 16px;font-weight: normal;font-style: normal;color: #ffffff;}#main-header .navbar-nav > li > a:focus, #main-header .navbar-nav > li > a:hover, .local-box-fluid h2  {color: #ffffff;}#page-content div.content, div.content .panel, div.content .list-group-item, .modal-content { background-color: #ffffff;}#page-content div.content-wrap { background-color: #ffffff; border-width: 1px; border-style: solid; padding:15px; border-radius:4px;margin-bottom: 20px;}#page-content div.content-wrap, #page-content div.content, #page-content .panel, #page-content .panel .panel-heading, #page-content .nav-tabs, #page-content .list-group-item, #page-content th, #page-content td, #page-content .tab-content-line, .modal-content, #local-information .list-group-item { border-color: #dddddd;}#heading {color: #333333;}.under-heading {background-image: none; height: auto;height: 50px;}.partial .panel {background-color: #ffffff;}.partial .panel, .partial .panel-default > .panel-heading, .partial .panel-cart, #page-content .cart-total .table td,.panel-cart .location-control, .panel-cart .cart-coupon, #local-info .panel-local, .panel-local .panel-heading {border-color: #eeeeee;}.partial .module-box li, .partial > .module-box .list-group-item, #category-box .list-group-item a, .cart-items ul li {background-color: transparent;border-color: #eeeeee; border-width: 0 0 1px; border-style: solid;}.partial .module-box .panel, .partial .list-group-item a, .cart-items ul li .amount, .cart-total .table td,.cart-items ul li .name, .cart-items ul li .name-image:focus .name, .cart-items ul li .name-image:hover .name {color: #484848;}.partial .text-muted { color: #7a7a7a;}a, .btn-link { color: #337ab7;}a:hover, a:focus, .btn-link:focus, .btn-link:hover,#page-footer .main-footer a:hover, #page-footer .main-footer a:focus,#page-footer .bottom-footer a:hover, #page-footer .bottom-footer a:focus,a.list-group-item:hover, .list-group-item > a:hover,.side-bar a.list-group-item.active, .side-bar .list-group-item.active > a,.side-bar a.list-group-item:hover, .side-bar .list-group-item > a:hover,a.list-group-item.active, .list-group-item > a.active { color: #23527c;}.btn-default, .panel-default .panel-heading, .panel-nav-tabs.panel-default .panel-heading {background-color: #e7e7e7;border-color: #e7e7e7;color: #333333;}.btn-default:hover, .btn-default:focus, .btn-default.active, .btn-default:active {background-color: #d3d3d3;border-color: #d3d3d3;color: #1f1f1f;}.btn-primary, .panel-primary .panel-heading, .panel-nav-tabs.panel-primary .panel-heading {background-color: #428bca;border-color: #428bca;color: #ffffff;}.btn-primary:hover, .btn-primary:focus, .btn-primary.active, .btn-primary:active {background-color: #2e77b6;border-color: #2e77b6;color: #ffffff;}.nav-pills > li.active > a {background-color: #428bca;color: #ffffff;}.btn-success, .panel-success .panel-heading, .panel-nav-tabs.panel-success .panel-heading {background-color: #5cb85c;border-color: #5cb85c;color: #ffffff;}.btn-success:hover, .btn-success:focus, .btn-success.active, .btn-success:active {background-color: #48a448;border-color: #48a448;color: #ffffff;}.btn-danger, .panel-danger .panel-heading, .panel-nav-tabs.panel-danger .panel-heading {background-color: #d9534f;color: #ffffff;}.btn-danger:hover, .btn-danger:focus, .btn-danger.active, .btn-danger:active {background-color: #c53f3b;color: #ffffff;}.btn-warning, .panel-warning .panel-heading, .panel-nav-tabs.panel-warning .panel-heading {background-color: #f0ad4e;border-color: #f0ad4e;color: #ffffff;}.btn-warning:hover, .btn-warning:focus, .btn-warning.active, .btn-warning:active {background-color: #dc993a;border-color: #dc993a;color: #ffffff;}.btn-info, .panel-info .panel-heading, .panel-nav-tabs.panel-info .panel-heading {background-color: #5bc0de;border-color: #5bc0de;color: #ffffff;}.btn-info:hover, .btn-info:focus, .btn-info.active, .btn-info:active {background-color: #47acca;border-color: #47acca;color: #ffffff;}#page-footer {background-color: #edeff1; background-image:linear-gradient(to bottom, #edeff1, #edeff1);}#page-footer .bottom-footer {background-color: #fbfbfb;}#page-footer .main-footer, #page-footer .main-footer a, #page-footer .main-footer .footer-title { color: #9ba1a7;}#page-footer .bottom-footer, #page-footer .bottom-footer a, #page-footer .bottom-footer .footer-title { color: #a3aaaf;} dd .btn {margin-right: 500} .mySlidesi{display:none;}  </style>
      <script src='js/jquery-1.11.2.min.js?ver=2.1.1' charset='utf-8' type='text/javascript' id='jquery-js' ></script>
      <script src='js/bootstrap.min.js?ver=2.1.1' charset='utf-8' type='text/javascript' id='bootstrap-js' ></script>
      <script src='js/select2.js?ver=2.1.1' charset='utf-8' type='text/javascript' id='select-2-js' ></script>
      <script src='js/jquery.raty.js?ver=2.1.1' charset='utf-8' type='text/javascript' id='jquery-raty-js' ></script>
      <script src='js/common.js?ver=2.1.1' charset='utf-8' type='text/javascript' id='common-js' ></script>        	
      <script src-'js/jquery.min.js'></script>
      <script src-'js/owl.carousel.min.js'></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
      <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
      <![endif]-->
   </head>
   <body class=''>
      <header id='main-header' style='background-color:black;'>
         <div class='container'>
            <div class='row'>
               <div class='col-sm-5'>
                  <div class='logo'>
                     <a class='' >
                     Eat ethnic									</a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div id='opaclayer' onclick='closeReviewBox();'></div>
      <!--[if lt IE 7]>
      <p class='chromeframe'>You are using an outdated browser. <a href='http://browsehappy.com/'>Upgrade your browser today</a> or <a href='http://www.google.com/chromeframe/?redirect=true'>install Google Chrome Frame</a> to better experience this site.</p>
      <![endif]-->
      <div id='slider' style='width:100%;'>
         <img src=' assets/foof3.jpg ' alt='Welcome to FoodApp '/>
         <img src='assets/foof5.jpg ' alt='Welcome to FoodApp '/>
         <img src='assets/tai.jpg ' alt='Welcome to FoodApp ' />
         <img src='assets/fri.jpg ' alt='Welcome to FoodApp ' />
         <img src='assets/ceva.jpg ' alt='Welcome to FoodApp ' />
         <img src='assets/fri2.jpg ' alt='Welcome to FoodApp ' />
      </div>
      
      
      <div class="owl-carousel">
	  <div> <img src=' assets/foof3.jpg ' alt='Welcome to FoodApp '/> </div>
	  <div> <img src='assets/foof5.jpg ' alt='Welcome to FoodApp '/> </div>
	  <div> <img src='assets/tai.jpg ' alt='Welcome to FoodApp ' /> </div>
	  <div> <img src='assets/fri.jpg ' alt='Welcome to FoodApp ' /> </div>
	  <div> <img src='assets/ceva.jpg ' alt='Welcome to FoodApp ' /> </div>
	  <div> <img src='assets/fri2.jpg ' alt='Welcome to FoodApp ' /> </div>
	</div>

      <div id='htmlcaption ' style='display: none; '>
         <em>HTML</em> caption. Link to <a href='http://www.google.com/ '>Google</a>.
      </div>
      <div id='page-wrapper' class='content-area'></div>
      <div id='page-content'>
         <div class='container' style='poiotion: relative; margin: auto;'>
            <div class='row'>
               <div class='location-list col-sm-9'>
                  <div class='panel panel-local'>
                     <div class='panel-body'>
                        <div class='row'>
                           <div class='box-one col-xs-12 col-sm-5'>
                           
                           <!--IMAGES FOR SLIDER -->
                              <img class='img-responsive pull-left gradient mySlides' src='assets/MeatPie.png' style='width: 200; height: 150;'/>
                              
                              <img class='img-responsive pull-left gradient mySlides' src='assets/cv.jpg' style='width: 200; height: 150;'/>
                            
                              <img class='img-responsive pull-left gradient mySlides' src='assets/jollof.jpg' style='width: 200; height: 150;'/>
                        
                              <dl>
                                 <dd>

                                    <h4>Grace Catering & Baking</h4>
                                 </dd>
                                 <dd>
                                    <div class='rating rating-sm text-muted'>
                                       <span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star-half-o'></span><span class='fa fa-star-o'></span>
                                       <span></span>
                                    </div>
                                 </dd>
                                 <!--Spr-->
                                 <dd><span class='text-muted'>44 Darnley Road</span></dd>
                                 <dd><span class='text-muted'>Greater London E9 6QH</span></dd>
                                 <dd><span class='text-muted'> <a href='tel:(289) 990-7168'>(289) 990-7168 </a> <a href='tel:(289) 501-2065'>(289) 501-2065</a></span></dd>
                                 
                              </dl>
                           </div>
                           <div class='clearfix visible-xs wrap-bottom'></div>
                           <div class='clearfix visible-xs border-top wrap-bottom'></div>
                           <div class='col-xs-6 col-sm-4'>
                              <dl>
                                 <dd class='text-info'>
                                 <dt> $status </dt>
                                 <dd class='text-muted'>
                                    Speciality:	Jollof rice, Mince Pie</dd>	
                                    <dd class='text-muted'> Origin: Nigeria </dd>
                                    <dd class='text-muted'> Category: Catering, Bakery </dd>
                                    <dd class='text-muted'> Options: Delivery, Pick-up </dd>
								 <dd style='color:red;' class='text-muted'>
                                    Price range: <b>$30 - $50 </b>		
                                 </dd>
                              </dl>
                           </div>
                           <div class='col-xs-6 col-sm-3 text-right'>
                              <dl>
                                 <dd><a class='btn btn-primary' href='order.php' id='btn'>View Menu</a></dd>
                                 <dd class='text-muted small'>
                                    																										
                                 </dd>
                              </dl>
                           </div>
						   <hr>
                              <div style='position: relative; font-weight:bold; width: 100%; margin: 0 auto';>
												
												</div>
                           <div class='clearfix'></div>
                        </div>
                     </div>
                  </div>
                  
                 

                  
                  
                  
                  <div class='panel panel-local'>
                     <div class='panel-body'>
                        <div class='row'>
                           <div class='box-one col-xs-12 col-sm-5'>
                             
                              <img class='img-responsive pull-left gradient mySlidesi' src='images/babchi.jpg' style='width: 200; height: 150;'/>
                              
                              <img class='img-responsive pull-left gradient mySlidesi' src='images/croti.jpg' style='width: 200; height: 150;'/>
                            
                              <img class='img-responsive pull-left gradient mySlidesi' src='images/cgoat.jpg' style='width: 200; height: 150;'/>
                        
                              <dl>
                                 <dd>
                                 

                                    <h4>Charm's Jerk Hut</h4>
                                 </dd>
                                 <dd>
                                    <div class='rating rating-sm text-muted'>
                                       <span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star-half-o'></span><span class='fa fa-star-o'></span>
                                       <span>(0)</span>
                                    </div>
                                 </dd>
                                 <dd><span class='text-muted'>400 Lewisham Way<br />Lewisham SE10 9HF</span></dd>
                                 <dd><span class='text-muted'>0 Miles</span></dd>
                              </dl>
                           </div>
                           
                           <div class='clearfix visible-xs wrap-bottom'></div>
                           <div class='clearfix visible-xs border-top wrap-bottom'></div>
                           <div class='col-xs-6 col-sm-4'>
                              <dl>
                                 <dd class='text-info'>
                                 <dt> $status </dt>
                                 <dd class='text-muted'>
                                    Speciality:	Curry Goat, Jerk Chicken</dd>	
                                    <dd class='text-muted'> Origin: Jamaica </dd>
                                    <dd class='text-muted'> Category: Delivery, Take out </dd>
                                    <dd class='text-muted'> Options: Delivery, Pick-up </dd>
								 <dd style='color:red;' class='text-muted'>
                                    Price range: <b>$30 - $50 </b>		
                                 </dd>
                              </dl>
                           </div>
                           
                           <div class='col-xs-6 col-sm-3 text-right'>
                              <dl>
                                 <dd><a class='btn btn-primary' href='charms.php'>View Menu</a></dd>
                                 <dd class='text-muted small'>
                                  																										
                                 </dd>
                              </dl>
                           </div>
						   <hr>
                              <div style='position: relative; font-weight:bold; width: 100%; margin: 0 auto';>
												
												</div>
                           <div class='clearfix'></div>
                        </div>
                     </div>
                  </div>
				  <div class='panel panel-local'>
                     <div class='panel-body'>
                        <div class='row'>
                           <div class='box-one col-xs-12 col-sm-5'>
                              <img class='img-responsive pull-left' src='assets/Pastry-Make-Logo-2_636264650018001603.jpg'/>
                              <dl>
                                 <dd>
                                 

                                    <h4>Earling Closed</h4>
                                 </dd>
                                 <dd>
                                    <div class='rating rating-sm text-muted'>
                                       <span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star-half-o'></span><span class='fa fa-star-o'></span>
                                       <span>(0)</span>
                                    </div>
                                 </dd>
                                 <dd><span class='text-muted'>14 Lime Close<br />London HA3 7JG</span></dd>
                                 <dd><span class='text-muted'>0 Miles</span></dd>
                              </dl>
                           </div>
                           <div class='clearfix visible-xs wrap-bottom'></div>
                           <div class='clearfix visible-xs border-top wrap-bottom'></div>
                           <div class='col-xs-6 col-sm-4'>
                              <dl>
                                 <dd class='text-info'>
                                 <dt>$status</dt>
                                 <dd class='text-muted'>
                                    Delivery in <b>45</b> minutes																																									
                                 </dd>
                                 <dd class='text-muted'>
                                    Pick-up in <b>15</b> minutes																																										
                                 </dd>
								  <dd style='color:red;' class='text-muted'>
                                    Price range: <b>$30 - $50 </b>		
                                 </dd>
                              </dl>
                           </div>
                           <div class='col-xs-6 col-sm-3 text-right'>
                              <dl>
                                 <dd><a class='btn btn-primary' href='order.php'>View Menu</a></dd>
                                 <dd class='text-muted small'>
                                    Offers both delivery and pick-up.																											
                                 </dd>
                              </dl>
                           </div>
						   <hr>
                              <div style='position: relative; font-weight:bold; width: 100%; margin: 0 auto';>
												We offer rice, beans, yam and potato.
												</div>
                           <div class='clearfix'></div>
                        </div>
                     </div>
                  </div>
				  
				  
				  
			
            </div>
         </div>
      </div>
      <footer id='page-footer'>
         <div class='main-footer'>
            <div class='container'>
               <div class='row'>
                  <div class='col-xs-12 col-sm-3 pull-right'>
                     <div class='social-bottom'>
                        <h4 class='footer-title'>Follow us on:</h4>
                        <ul class='social-icons'>
                           <li><a class='fa fa-facebook' target='_blank' href='#'></a></li>
                           <li><a class='fa fa-twitter' target='_blank' href='#'></a></li>
                           <li><a class='fa fa-google-plus' target='_blank' href='#'></a></li>
                           <li><a class='fa fa-youtube' target='_blank' href='#'></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class='bottom-footer'>
            <div class='container'>
               <div class='row'>
                  <div class='col-xs-12 wrap-all border-top'>
                     &copy; 2017 FoodApp
                     <!-- End powered by -->
                  </div>
               </div>
            </div>
         </div>
         <script>
                        var myIndex = 0;
                        carousel();

                        function carousel() {
                            var i;
                            var x = document.getElementsByClassName('mySlides');
                            for (i = 0; i < x.length; i++) {
                               x[i].style.display = 'none';  
                            }
                            myIndex++;
                            if (myIndex > x.length) {myIndex = 1}    
                            x[myIndex-1].style.display = 'block';  
                            setTimeout(carousel, 2000); // Change image every 2 seconds
                        }
</script>

            <script>
                        var myIndexi = 0;
                        carouseli();

                        function carouseli() {
                            var i;
                            var x = document.getElementsByClassName('mySlidesi');
                            for (i = 0; i < x.length; i++) {
                               x[i].style.display = 'none';  
                            }
                            myIndexi++;
                            if (myIndexi > x.length) {myIndexi = 1}    
                            x[myIndexi-1].style.display = 'block';  
                            setTimeout(carouseli, 3000); // Change image every 2 seconds
                        }
</script>

<script>
$('.loop').owlCarousel({
    center: true,
    items:2,
    loop:true,
    margin:10,
    responsive:{
        600:{
            items:4
        }
    }
});
$('.nonloop').owlCarousel({
    center: true,
    items:2,
    loop:false,
    margin:10,
    responsive:{
        600:{
            items:4
        }
    }
});
</script>


      </footer>
   </body>
</html>
";

echo "$htm";
?>
