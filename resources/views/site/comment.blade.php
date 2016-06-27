@extends('layout')

@section('title')

 اتصل بنا

@stop



@section('content')



<div class="container">
<div class="col-md-12">
    <div class="form-area">  
        {!! Form::open( [ 'url' => '/adminpanel/store/comment','files' =>'true' ]) !!}

        {!! csrf_field() !!}
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">أتصل بنا</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="الاسم " required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="phone" placeholder="البريد الخاص بك او رقم التليفون " required>
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="الموضوع" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" name="comment" placeholder="- الشكوى -التعليق" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">أكتب كل ما يدور فى رأسك
                    </div>
            
        <input type="submit" name="submit" class="btn btn-primary pull-right" value="ارسال"> 
        </form>
    </div>
</div>
</div>

@stop