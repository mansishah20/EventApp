@extends("layout.main")

@section("contain")


<center><h1 style="text-decoration:underline">User Data :-</h1>
<a href="/admin/create" style="font-size:20px"> Add New Data</a><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>User Name</th>
	<th>Email Id</th>
    <th>Address</th>
    <th>City</th>
	<th>Contact No. </th>
    <th>Gender</th>
	<th>User Type</th>
	<th>Action</th>
	</tr>
	@foreach($usermaster as $user)
	<tr>
	<td>{{$user->name}}</td>
	<td>{{$user->email}}</td>
    <td>{{$user->address}}</td>
    <td>{{$user->city}}</td>
	<td>{{$user->contact}}</td>
	<td>{{$user->gender}}</td>
	<td>{{$user->type}}</td>
	
	<td>
	<a href="/admin/{{$user->id}}/edit">Edit</a> / <a href="/admin/{{$user->id}}/destroy">Delete</a>
	
	</td>
	</tr>
	@endforeach
</table></center>
@stop