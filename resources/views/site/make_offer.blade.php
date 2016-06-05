
@extends('layout')

@section('title')
انشاء طلب
@stop

@section('content')

<div class="container" style="direction:rtl;margin-right:30px;" >

<table class="table">
<?php 


$id='make_offer/'.$thingInfo['id'];



?>
{!! Form::open( [ 'url' =>$id,'method'=>'POST' ] ) !!}

{!! csrf_field() !!}



<tr>
<td><h4 class="" style="margin: 20px;padding: 10px;font-size: 18px;">ينبغى عليك كتابة كل الضمنات التى تريد ان توصلها لصاحب هذا الشئ كى يوافق لك على طلبك :</h4></td>
</td><td>{!!Form::textarea("msg_to_owner")!!}</td>

</tr>
<tr>
<td>
<td>{!!Form::hidden('offer',$thingInfo['name'])!!}</td>
<td>{!!Form::hidden('pic',$thingInfo['pic'])!!}</td>
<td>{!!Form::hidden('thing_id',$thingInfo['id'])!!}</td>
<td>{!!Form::hidden('owner_id',$thingInfo['owner'])!!}</td>
<td>{!!Form::hidden('owner_name',$thingInfo['owner_name'])!!}</td>
</tr>
<tr>
<td></td>
<td>{!!Form::submit("تأكيد الطلب",["class"=>"btn btn-primary"])!!}</td>

</tr>

{!!Form::close()!!}
</table>
</div>

@stop

