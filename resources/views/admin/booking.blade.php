@extends("layout.main")

  @section("contain")
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8 offset-2">
      <h2>View Booking</h2></br>
  
  <table class="table table-striped">
    <thead>
      <tr>
		    <th>To_date</th>
	      <th>From_date</th>
		    <th>Advance Payment</th>
		    <th>User Name</th>
		    <th>Package</th>
		    <th>Option</th>
      </tr>
    </thead>
    <tbody>
    @foreach($booking->sortByDesc('id') as $b)
      <tr>
          <td>{{$b->to_date}}</td>
          <td>{{$b->from_date}}</td>
          <td>{{$b->advance_pay}}</td>
          <td>{{$b->username}}</td> 
          <td>{{$b->packagename}}</td>
		      <td>Edit/Delete</td>
      </tr>
    @endforeach
    </tbody>
  </table>
	
	  </div>
  </div>
</div>
<br>
@stop
