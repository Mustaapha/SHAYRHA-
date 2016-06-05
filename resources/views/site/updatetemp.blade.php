@extends('layout')

@section('title')

تعديل العرض
@stop


@section('content')

<div class="container">

<table style="direction: rtl;margin-left: 100px;" class="table">

{!! Form::model($things,['route'=>['thing.edit.update',$things->id],'method'=>'PATCH','files' =>'true','class'=>'form-horizontal ']) !!}

{!! csrf_field() !!}

<tr>
<td>Enter The Name Of Thing:</td><td>{!!Form::text("thing")!!}</td>
</tr>
<tr>
<td>Enter The description of Thing:</td><td>{!!Form::textarea("thing_desc")!!}</td>

</tr>
<tr>
<td>Attach Img File:</td><td>{!!Form::file("thing_img")!!}</td>
</tr>
<tr>
<td>{!!Form::submit("Update",["class"=>"btn btn-info"])!!}</td>
</tr>

{!!Form::close()!!}
</table>
</div>

@stop