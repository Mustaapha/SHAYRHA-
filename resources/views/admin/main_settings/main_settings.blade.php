@extends('admin.layout')

@section('content')

<div style="direction: rtl;" class="container">
    <div class="row">
        <div  class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div style="font-size: 17px" class="panel-heading">الاعدادات الرئيسية</div>
                <div class="panel-body">
                    <form style="direction: rtl;" class="form-horizontal" role="form" method="POST" action="{{ url('/adminpanel/update/main_setting') }}">

                        {!! csrf_field() !!}


                        @foreach($main_settings as $main)

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">{{$main->slug}}</label>
                            @if($main->type==0)
                            <div class="col-md-6">
                                <input type="{{$main->type}}" class="form-control" name="{{$main->setting_name}}" value="{{$main->value}}">

                                @if ($errors->has($main->setting_name))
                                    <span class="help-block">
                                        <strong>{{ $errors->first($main->setting_name) }}</strong>
                                    </span>
                                @endif
                            </div>
                            

                            @else

                            <div class="col-md-6">

                                <textarea name="{{$main->setting_name}}" class="form-control">
                                {{$main->value}}
                                </textarea>

                                @if ($errors->has($main->setting_name))
                                    <span class="help-block">
                                        <strong>{{ $errors->first($main->setting_name) }}</strong>
                                    </span>
                                @endif
                            </div>

                            @endif

                        </div>

                        @endforeach

                        
                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button name="submit" style="font-size: 18px" type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>تسجيل
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@stop