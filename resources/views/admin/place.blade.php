@extends("layout.main")

  @section("contain")
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8 offset-2">
      <h2>Add Place</h2><br>
      <form action="/admin/placestore" method="post">
      @csrf
      
  <div class="form-group">
    <label for="place">Place Name:</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Place" >
  </div>
  <button type="submit" class="btn btn-success">Add</button>
</form>
	</br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Place</th>
        <th>Option</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($place->sortByDesc('id') as $p)
      <tr>
          <td>{{$p->name}}</td>
		      <td>
            <a href="/admin/{{$p->id}}/placeedit">Edit</a> / <a href="/admin/{{$p->id}}/placedestroy">Delete</a>
          </td>
      </tr>
    @endforeach
	  </tbody>
  </table>
	
	  </div>
  </div>
</div>
<br>
@stop