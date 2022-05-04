<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Inventory System</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="/plugin/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="/plugin/slick.css">
  <!-- themefy-icon -->
  <!-- animation css -->
  <!-- venobox popup -->
  
  <!-- Main Stylesheet -->
  <link href="/css/style.css" rel="stylesheet">

  <!--Favicon-->
  <!--<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">-->
  <link rel="icon" href="/images/favicon.png" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
  
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
       <h2 style="color:white;font-size:55px;margin:20px 0px 20px 0px;"> Event Handling</h2>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item">
        <a class="nav-link" href='/admin/categoryindex'>Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='/admin/placeindex'>Place</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='/admin/packageindex'>Package</a>
      </li>    
      
      <li class="nav-item">
        <a class="nav-link" href='/admin/addpackage'>Add Package</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href='/admin/bookingindex'>Booking</a>
      </li>    
      @if(session()->has('name'))
      <li class="nav-item @@blog">
	      <a class="nav-link" href="/admin/logout"><span class="glyphicon glyphicon-log-in"></span><b> Logout</b></a>
      </li>
	  @else 
      <li class="nav-item @@blog" style="padding-right:0px;padding-left:20px">
       <a class="nav-link" href="/admin/login"><span class="glyphicon glyphicon-log-in"></span> <b>Login</b></a>
      </li>
	  @endif  

            
	  </ul>

        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->

<!-- hero slider -->
<section class="hero-section overlay bg-cover"  size="50%">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
          <h1 style="color:orange;">Welcome {{session()->get('uname')}} !</h1><br>
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Our Purpose</h1>
            <h5 class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">
              The Primary Purpose of an Inventory System is to keep an accurate records of stockroom supplies.The resons to maintain accurate inventory records includes financial accounting, customer order fulfillment, stock replenishment and maintaining the ability to locate specific an item.
            </h5>
            </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Importance Of Inventory System</h1>
            <h5 class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">
              Inventory management is important to small businesses because it helps them prevent stockouts, manage multiple locations, and ensure accurate recordkeeping. An inventory solution makes these processes easier than trying to do them all manually.
              </h5>
            </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-9">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1"><i>Your bright future is our Mission</i></h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4"></p>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
    <br>
			@yield("contain")
			<br><br><br>
	  </div>
  </div>
</div>
<script src="/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="/plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="/plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="/plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="/plugins/filterizr/jquery.filterizr.min.js"></script>

<!-- Main Script -->
<script src="/js/script.js"></script>



 <!-- Start Footer -->
 <footer class="footer-box">
        <div class="container">
		
		   <div class="row">
		   
		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			     <div class="footer_blog">
				    <div class="full white_fonts">
					    <p id="p2">The Primary Purpose of an Inventory System is to keep an accurate records of stockroom supplies.The resons to maintain accurate inventory records includes financial accounting, customer order fulfillment, stock replenishment and maintaining the ability to locate specific an item.</p>
					 </div>
				 </div>
			  </div>
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			       <div class="footer_blog full white_fonts">
						    <h3>Quick links</h3>
                
                  <div class="full">
						    <ul> 
                <li><a href="/home">> Home</a></li>
							  <li><a href="/usermaster">> User</a></li>
							  <li><a href="/categorymaster">> Category</a></li>
							  <li><a href="/itemmaster">> Item</a></li>
							  <li><a href="/placemaster">> Place</a></li>
							</ul>
</div>

						 </div>
				 </div>
				 
				
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Contact us</h3>
                 <p>
							 <ul class="full">
							   <li><span>Shiv Class<br>Surendranagar</span></li>
							   <li><span>pshah2806@gmail.com</span></li>
							   <li><span>+917434070542</span></li>
							 </ul>

						 </div>
					</div>	 
			  
		   </div>
		
        </div>
    </footer>
    <!-- jQuery -->
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2021 design by Shiv Class</p>
                </div>
            </div>
        </div>
    </div>



</body>
</html>