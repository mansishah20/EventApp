@extends("layout.main")

  @section("contain")
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8 offset-2">
 
<h2>Add Package</h2><br>
  <form action='/admin/packagestore' method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="package">Package Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Package" >
    </div>
  
    <div class="form-group">
      <label for="package">Photo:</label>
      <input type="file" class="form-control" name="photo">
    </div>
  
    <div class="form-group">
      <label for="package_details">Package Details:</label>
      <input type="textarea" class="form-control" name="details" placeholder="Enter Package Details" >
    </div>
  
    <div class="form-group">
      <label for="price">Package Price:</label>
      <input type="text" class="form-control" name="price" placeholder="Enter Price" >
    </div>
  
 
    <div class="form-group">
      <label for="price">Category:</label>

      <select name="category">
      @foreach($category->sortByDesc('id') as $c)
          <option value='{{$c->id}}'> {{$c->name}} </option>
      @endforeach
	
      </select>
  
    </div>
 
    <br>
  
  
    <div class="form-group">
      <label for="price">Place:</label>

      <select name="place">
      @foreach($place->sortByDesc('id') as $c)
          <option value='{{$c->id}}'> {{$c->name}} </option>
      @endforeach
	
      </select>
  
    </div>
  
    <button type="submit" class="btn btn-success">Add</button>
  </form>
	</br>
    </div>
  </div>
</div>  
<br>

@stop