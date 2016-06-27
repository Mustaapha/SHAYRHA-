@extends('layout')
@section('title')
تسجيل الدخول
@stop


@section('content')
<div style="background: #798992;" class="container">
    <div style="direction: rtl;" class="row">
        <div class="col-md-8 col-md-offset-2">
            <div style="background: #F7BE81;" class="panel panel-default">
                <div class="login-nav">تسجيل الدخول</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">البريد الالكترونى</label>

                            <div class="col-md-6">
                                <input type="email" placeholder="أكتب بريدك الالكترونى" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">كلمة المرور</label>

                            <div class="col-md-6">
                                <input type="password" placeholder="أكتب رقمك السرى" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input style="margin-right: -18px" type="checkbox" name="remember">تذكرنى
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button style="background:#798992;font-size:16px;font-weight:bold"  type="submit" class="btn btn-primary">
                                    <i  class="fa fa-btn fa-sign-in"></i>تسجيل الدخول
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">هل نسيت كلمة المرور ؟</a>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="/redirect"><img src="img/loginfb.png" width="210" height="50" /></a>

                                
                            </div>
                        </div>


                        
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
