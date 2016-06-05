
@extends('layout')

@section('title')
انشاء طلب
@stop

@section('content')

<div class="container" style="direction:rtl;margin-right:30px;" >

<table class="table">

{!! Form::open( [ 'url' =>'notification/store','method'=>'POST' ] ) !!}

{!! csrf_field() !!}



<tr>
<td><h4 class="" style="margin: 20px;padding: 10px;font-size: 18px;">ينبغى عليك كتابة كل الضمنات التى تريد ان توصلها لــ <span style="color: #09f">{{$owner_replay['needer_name']}} </span> لكى يتمكن من مشاركتك الــ <span style="color: #09f">{{$owner_replay['offer_name']}} </span></h4></td>
</td><td>{!!Form::textarea("msg_owner_replay")!!}</td>

</tr>
<tr>
<td>
<td>{!!Form::hidden('needer_name',$owner_replay['needer_name'])!!}</td>
<td>{!!Form::hidden('needer_id',$owner_replay['needer_id'])!!}</td>
<td>{!!Form::hidden('offer_name',$owner_replay['offer_name'])!!}</td>
<td>{!!Form::hidden('offer_pic',$owner_replay['offer_pic'])!!}</td>
<td>{!!Form::hidden('thing_id',$owner_replay['thing_id'])!!}</td>


</tr>
<tr>
<td></td>
<td>{!!Form::submit("ارسال الرد",["class"=>"btn btn-primary"])!!}</td>

</tr>

{!!Form::close()!!}
</table>
</div>

@stop

