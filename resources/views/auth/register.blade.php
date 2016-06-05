@extends('layout')

@section('title')
انشاء حساب
@stop


@section('content')
<div style="background: #798992;direction: rtl;" class="container">
    <div class="row">
        <div class="col-md-12  ">
            <div class=" panel-default">
               <!-- <div style="font-size: 17px" class="panel-heading">تسجيل حساب جديد</div>-->
                <div class="panel-body">
                    <form  style="direction: rtl;" class="form-horizontal form-register" role="form" method="POST" action="{{ url('/register') }}">

                        {!! csrf_field() !!}

                        <table class=" register-table table">

                        <tr>


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <td>
                            <label style="float: right;"  class="col-md-2 control-label">الاسم:</label>
                        </td>
                        <td>    

                            <div class="col-md-10">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </td>

                        </tr>

                        <tr>
                        <td>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label style="float: right;" class="col-md-4 control-label">البريد الالكترونى:</label>
                        </td>    

                        <td>
                            <div class="col-md-10">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                          
                        </div>
                        </tr>  
                        <tr>
                        <td>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label style="float: right;" class="col-md-4 control-label">الرقم السرى:</label>
                        </td>
                        
                        <td>    

                            <div class="col-md-10">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                            
                        </div>

                        </tr>

                        <tr>
                        <td>
                        

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label style="float: right;" class="col-md-4 control-label">أعد كتابة الرقم السرى :</label>

                        </td> 
                        <td>


                            <div class="col-md-10">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </td>    
                        </div>

                        </tr>

                        <tr>
                        <td>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label style="float: right;" class="col-md-4 control-label">العنوان التفصيلى :</label>

                        </td>
                        
                        <td>    

                            <div class="col-md-10">
                                <input type="text" class="form-control" name="address">

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </td>
                            
                        </div>

                        </tr>

                        <tr>
                        <td>
                        <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                            <label style="float: right;" class="col-md-4 control-label">اسم الشهرة </label>
                        </td>
                        <td> 
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="user_name">

                                @if ($errors->has('user_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </td>    
                        </div>
                        </tr>


                        <div class="form-group{{ $errors->has('user_pic') ? ' has-error' : '' }}">
                            

                            <div class="col-md-10">
                                <input type="hidden" class="form-control" name="user_pic" value="logo.png">

                                @if ($errors->has('user_pic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_pic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <tr>
                        <td>
                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label style="float: right;" class="col-md-5 control-label">أختر المحافظة التى تسكنها</label>

                        </td> 
                        
                        <td>   

                            <div class="col-md-10">
                                
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
                        </td>
                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button style="font-size: 18px ;background: #FE9A2E" type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-user"></i>تسجيل
                                </button>
                            </div>
                        </div>
                        </td>
                        <td>
                        </tr>

                        </table>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
