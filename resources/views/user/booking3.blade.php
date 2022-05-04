
@extends("layout.user")

@section("contain")
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8 offset-2">


      <h2>Event</h2><br>
      <form action="#">
	  
	<div class="form-group">
		<label for="adv_payment">Place: Ahmedabad</label>
	</div>
	
	<div class="form-group">
		<label for="adv_payment">Date: 5/7/2021 to 8/7/2021</label>
	</div>
	
	<div>
		<img src="image/i1.jpg" class="rounded" alt="Cinque Terre">
		<label for="adv_payment">Price: 1.5lk</label>
	</div>
	<br>
  <div class="form-group">
    <label for="adv_payment">Advance Payment:</label>
    <input type="text" class="form-control" placeholder="Enter Advance Payment" >
  </div>
  
  <div class="form-group">
    <label for="card_name">Card Name:</label>
    <input type="text" class="form-control" placeholder="Enter Card Name" >
  </div>
  
  <div class="form-group">
    <label for="card_number">Card Number:</label>
    <input type="text" class="form-control" placeholder="Enter Card Number" >
  </div>
  
  <div class="form-group">
    <label for="card_number">CVV Number:</label>
    <input type="text" class="form-control" placeholder="Enter Card Number" >
  </div>
  
  <div class="form-group">
    <label for="upi_id">UPI ID:</label>
    <input type="text" class="form-control" placeholder="Enter UPI ID" >
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</br>
  
	
	  </div>
  </div>
</div>
<br>
    </div>
  </div>
</div>


@stop