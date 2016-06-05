
@extends('layout')

@section('title')
تعديل الطلب
@stop

<?php $url='save_request_updated/'.$ids['id']; ?>


@section('content')

<div class="container" style="direction:rtl;margin-right:30px;" >

<table class="table">

{!! Form::open( ['url' =>$url ,'method'=>'PATCH'] ) !!}

{!! csrf_field() !!}



<tr>
<td><h4 class="" style="margin: 20px;padding: 10px;font-size: 18px;">هنا  يمكنك تعديل الرسالة التى أرسلتها من قبل لماك هذا العرض :</h4></td>
</td><td>{!!Form::textarea("msg_to_owner")!!}</td>

</tr>

<tr>
<td></td>
<td>{!!Form::submit("تأكيد الطلب",["class"=>"btn btn-primary"])!!}</td>

</tr>

{!!Form::close()!!}
</table>
</div>

@stop

