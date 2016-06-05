@extends('admin.layout')

@section('content')

<div style="direction: rtl;" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div style="font-size: 17px" class="panel-heading">تسجيل حساب جديد</div>
                <div class="panel-body">
                    <form style="direction: rtl;" class="form-horizontal" role="form" method="POST" action="{{ url('/adminpanel/add_user') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">الاسم:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">البريد الالكترونى:</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">الرقم السرى:</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">أعد كتابة الرقم السرى :</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">العنوان التفصيلى :</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address">

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">اسم الشهرة </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="user_name">

                                @if ($errors->has('user_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('user_pic') ? ' has-error' : '' }}">
                            

                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="user_pic" value="logo.jpg">

                                @if ($errors->has('user_pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">أختر المحافظة التى تسكنها</label>

                            <div class="col-md-6">
                                
                                <select name="location" class="form-control">
                                  <option value="bns">  بنى سويف </option>
                                  <option value="fashn">الفشن    </option>
                                  <option value="wasta">الواسطى  </option>
                                  <option value="naser">ناصر     </option>
                                  <option value="beba">   ببا    </option>
                                  <option value="tanta">طنطا  </option>
                                  <option value="zefta">زفتى  </option>
                                  <option value="ktor">قطور  </option>
                                  <option value="basion">بسيون  </option>
                                </select>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button style="font-size: 18px" type="submit" class="btn btn-primary">
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