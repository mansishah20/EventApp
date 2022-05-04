@extends("layout.main")

  @section("contain")
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8 offset-2">
      <h2>Add Category</h2><br>
      <form action='/admin/categorystore' method="post" enctype="multipart/form-data">
      @csrf

  <div class="form-group">
    <label for="category">Category Name:</label>
    <input type="text" class="form-control" name="name" placeholder="Enter category" >
  </div>
  
  <div class="form-group">
    <label for="category_icon">Category Icon:</label>
    <input type="file" class="form-control" name="icon" >
  </div>
  
  <button type="submit" class="btn btn-success">Add</button>
</form>
	</br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Categoty</th>
		    <th>Icon</th>
        <th>Option</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($cat->sortByDesc('id') as $c)
      <tr>
          <td>{{$c->name}}</td>
		      <td><img src="/caticon/{{$c->icon}}" width="100px" height="100px"/></td>
          <td>
            <a href="/admin/{{$c->id}}/categoryedit">Edit</a> / <a href="/admin/{{$c->id}}/categorydestroy">Delete</a>
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