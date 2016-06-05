@extends('layout')

@section('title')

تقديم عرض

@stop 

@section('head')

<style type="text/css">
  
  .add-offer-li {
    color: #ffa500;
    font-size: 18px;
    border: 1px solid #fff;
    padding: 5px;
}
</style>
@stop


@section('content')


<div class="container">


<table style="direction: rtl;margin-left: 100px;" class="table">
{!! Form::open( [ 'url' => 'add_thing','files' =>'true' ]) !!}

{!! csrf_field() !!}
<tr>
<div  class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <td>  <label class="col-md-3 control-label">العرض:</label></td>

                            <td><div class="col-md-9">
                                {!!Form::text("thing", "",["class"=>"form-control"])!!}
                                

                                @if ($errors->has('thing'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('thing') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </td>
</div>
</tr>
<tr>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <td> <label class="col-md-3 control-label"> التفاصيل:</label></td>

                            <td><div class="col-md-9">
                                {!!Form::textarea("thing_desc", "",["class"=>"form-control"])!!}
                                

                                @if ($errors->has('thing_desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('thing_desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </td>
</div>


</tr>




<tr>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <td> <label class="col-md-3 control-label"></label></td>

                            <td><div class="col-md-9">
                                {!!Form::file("thing_img",["class"=>"form-control"])!!}
                                

                                @if ($errors->has('thing_img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('thing_img') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </td>
</div>
</tr>
<tr>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <td> <label class="col-md-3 control-label"></label></td>

                            <td><div class="col-md-9">
                                {!!Form::submit("تأكيد العرض",["class"=>"btn btn-info"])!!}
                                

                                @if ($errors->has('تأكيد العرض'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('تأكيد العرض') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </td>
</div>
</tr>

{!!Form::close()!!}
</table>
</div>

@stop