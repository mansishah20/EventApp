@extends("layout.user")

  @section("contain")

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8 offset-2">
      <h2>My Booking</h2><br>-
      <form action="#">
	  
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Place</th>
		<th>Date</th>
		<th>Package</th>
		<th>Price</th>
		<th>Advance Payment</th>
		<th>Card Name</th>
		<th>Card Number</th>
		<th>CVV Number</th>
		<th>UPI ID</th>
        <th>Option</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
       
      </tr>
	  
    </tbody>
  </table>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>
	</br>
  
	
	  </div>
  </div>
</div>
<br>
@stop