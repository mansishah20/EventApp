@extends("layout.user")

  @section("contain")
  <div class="container" style="margin-top:30px">
   <div class="row">
      <div class="col-sm-8 offset-2">


      <h2>Booking</h2><br>
      <form action="#">
 
  <div>
		<img src="image/i1.jpg" class="rounded" alt="Cinque Terre"> 
		<textarea name="detais" placeholder="Details" ></textarea>
	</div>
	<br>
	
  <div class="form-group">
    <label for="category_icon">Price:</label>
	<input type="price" class="form-control" placeholder="Enter Price">
  </div>
  
  <button type="submit" class="btn btn-success">Booking</button>
	<br>
	</br>
	
	<div class="form-group">
    <label for="category_icon">Review:</label>
	<input type="review" class="form-control" placeholder="Enter Review">
  </div>
	
	
	<button type="submit" class="btn btn-success">Submit</button>
	  </div>
	  </form>
  </div>
</div>
<br>
    </div>
  </div>
</div>


@stop