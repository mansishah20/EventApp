@extends("layout.main")

@section("contain")
<div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-8 offset-2">
        <h2> Edit Package Details</h2><br>
        <form action='/admin/{{$pack->id}}/packageupdate' method="post" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="package">Package Name:</label>
                <input type="text" class="form-control" name="name" value="{{$pack->name}}" placeholder="Enter Package" >
            </div>
  
            <div class="form-group">
                <label for="package">Photo:</label>
                <input type="file" class="form-control" name="photo" value="{{$pack->photo}}">
            </div>
  
    <div class="form-group">
      <label for="package_details">Package Details:</label>
      <input type="textarea" class="form-control" name="details" value="{{$pack->details}}" placeholder="Enter Package Details" >
    </div>
  
    <div class="form-group">
      <label for="price">Package Price:</label>
      <input type="text" class="form-control" name="price" placeholder="Enter Price" value="{{$pack->price}}">
    </div>
  
 
    <div class="form-group">
      <label for="price">Category:</label>

      <select name="category" value="{{$pack->categoryname}}">
      @foreach($category->sortByDesc('id') as $c)
          <option value='{{$c->id}}'> {{$c->name}} </option>
      @endforeach
	
      </select>
  
    </div>
 
    <br>
  
  
    <div class="form-group">
      <label for="price">Place:</label>

      <select name="place" value="{{$pack->placename}}">
      @foreach($place->sortByDesc('id') as $c)
          <option value='{{$c->id}}'> {{$c->name}} </option>
      @endforeach
	
      </select>
   </div>
            <button type="submit" class="btn btn-success">Edit</button>

        </form>
      </div>
    </div>
</div>
<br>
@stop