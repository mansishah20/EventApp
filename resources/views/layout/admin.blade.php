<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://127.0.0.1:8000/plugin/css/bootstrap.min.css">
  <script src="http://127.0.0.1:8000/plugin/js/jquery.min.js"></script>
  <script src="http://127.0.0.1:8000/plugin/js/popper.min.js"></script>
  <script src="http://127.0.0.1:8000/plugin/js/bootstrap.min.js"></script>

<style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
    .navbar {
      margin-top:0px;
      height:auto;
    	width:100%;
	    position:fixed;
	    z-index:11;

    }

    #j1 {
    color: #000;
    padding: 15px;
	  width:auto;
  }

  
  </style>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!--<a class="navbar-brand" href="#">Navbar</a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
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
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Event Management</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>


        
        @yield("contain")

<div class="jumbotron text-center" style="margin-bottom:0" id="j1">
  <p>Design by : Parmar Shilpa V. & Khodakiya Rajvi M. & Makwana Jaya T.</p>
</div>

</body>
</html>
