@extends("layout.main")

@section("contain")
<div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-8 offset-2">
        <h2> Edit Category Details</h2><br>
        <form action='/admin/{{$cat->id}}/categoryupdate' method="post" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" name="name" class="form-control" value="{{$cat->name}}"><br><br>
            </div>
            <div class="form-group">
                <label for="icon">Category Icon:</label>
                <input type="file" name="icon" class="form-control" value="{{$cat->icon}}"><br><br>
            </div>
            <button type="submit" class="btn btn-success">Edit</button>

        </form>
      </div>
    </div>
</div>
<br>
@stop