@extends('admin.layout')
@section('title')
التحكم فى الاعضاء
@stop

@section('content')
<div class="row">
<div style="margin-left: -25px" class="col-md-9 ">

<div class="container">
<table class="table">
	<tr>
		<th>User Name</th>
		<th>Address</th>
		<th>job</th>
		<th>Action</th>
	</tr>


	@foreach ($userinfo as $user)

	<tr>
	<td>{{$user->name}}</td>
	<td>{{$user->location}}</td>
	<td>Admin</td>
	<td><span><a href="/adminpanel/user_delete/{{$user->id}}">حزف</a></span>  <span><a href="/adminpanel/view_edit_user/{{$user->id}}">تعديل</a></span></td>
	</tr>
		
	@endforeach
</table>

</div>
</div>
</div>

@stop