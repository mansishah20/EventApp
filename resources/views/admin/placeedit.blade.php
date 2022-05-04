@extends("layout.main")

@section("contain")
<div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-8 offset-2">
        <h2> Edit Place Details</h2><br>
        
        <form action='/admin/{{$place->id}}/placeupdate' method="post">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="place">Place Name:</label>
                <input type="text" class="form-control" name="name" value="{{$place->name}}"><br><br>
            </div>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>

      </div>
    </div>
</div>
<br>
@stop