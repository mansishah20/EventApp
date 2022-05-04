@extends("layout.user")

  @section("contain")



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/slider1.jpg" style="width:100%" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="image/slider2.jpg" style="width:100%" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="image/slider3.jpg" style="width:100%" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div><br><br>

	<div class="container">
		<div class="row">
				<div class="col-sm-6">
					<img src="http://127.0.0.1:8000/image/engagement.jpg"  style="width:100%" class="img img-responsive" />
				</div>
				<div class="col-sm-6">
					<img src="http://127.0.0.1:8000/image/weddding.jpg" style="width:100%" class="img img-responsive" />
				</div>
				
		</div>
	</div>
	
	

<br>
@stop