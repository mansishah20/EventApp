@extends("layout.user")

  @section("contain")
  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-8 offset-2">
      <h2>Booking</h2><br>
      <form action="#">
 
  <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Selecte Place
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Ahmedabad</a>
    <a class="dropdown-item" href="#">Rajkot</a>
    <a class="dropdown-item" href="#">Surat</a>
  </div>
</div><br>
  
  <div class="form-group">
    <label for="category_icon">Enter To_date:</label>
	<input type="date" class="form-control">
  </div>
  
  <div class="form-group">
    <label for="category_icon">Enter From_date:</label>
    <input type="date" class="form-control">
  </div>
 
  <button type="submit" class="btn btn-success">Submit</button>
</form>
	</br>
	
	<div>
    <img src="http://127.0.0.1:8000/image/i1.jpg" class="rounded" alt="Cinque Terre">
		<img src="image/i2.jpg" class="rounded" alt="Cnque Terre">
	</div>
	
	</div>
  </div>
</div>
<br>
    </div>
  </div>
</div>


@stop