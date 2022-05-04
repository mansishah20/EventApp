@extends("layout.main")

  @section("contain")
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8 offset-2">
      <h2>View Package </h2></br>
      <a class="nav-link" href='/admin/addpackage'>Add New Package</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
		<th>Photo</th>
	    <th>Details</th>
		<th>Price</th>
		<th>Category</th>
        <th>Place</th>
		<th>Option</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($pack->sortByDesc('id') as $p)
      <tr>
          <td>{{$p->name}}</td>
          <td><img src="/package/{{$p->photo}}" width="100px" height="100px"/></td>
          <td>{{$p->details}}</td>
          <td>{{$p->price}}</td>
          <td>{{$p->categoryname}}</td> 
          <td>{{$p->placename}}</td>
		      <td>
            <a href="/admin/{{$p->id}}/packageedit">Edit</a> / <a href="/admin/{{$p->id}}/packagedestroy">Delete</a>
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