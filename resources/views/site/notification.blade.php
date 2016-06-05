@extends('layout')

@section('title')

 الاشعارات

@stop

@section('head')

<style type="text/css">
  
  .notifi-li {
  	color: #ffa500;
  	font-size: 18px;
    border: 1px solid #fff;
    padding: 5px;
  }
</style>
@stop

@section('content')



@section('content')

    <div style="background: #798992" class="row">
            
        <div class="col-lg-12 col-md-12 col-sm12">

            
           <h1 style="color: #798992;"> {{$count=0}}</h1>
            @foreach($notifications as $notifi)

            
            <div class="notification">
		     <p>
			    
			   <span id="notifiGrap">
			   <span id="countNotifiIn">{{$count=1+$count}}</span>
		   	   <span id="neederName">{{$notifi->needer_name}}</span>
			   <span id="msgNotifi">طلب ان يشاركك الـــ </span>
			   <span id="notifiName">{{$notifi->offer}}  
			    <img id="notifiImg" src="{{asset('img/devhill/'.$notifi->offer_pic )}}" height="50" width="50"/>
			    </br>
			    <h3>{{$notifi->msg_to_owner}}</h3>
			   </span>
			   </br>
			  
			   <a href="/notification/view/owner/replay/{{$notifi->needer_name}}/{{$notifi->needer_id}} /{{$notifi->offer}}/{{$notifi->offer_pic}}/{{$notifi->thing_id}} ">موافقة</a><a href="/delete_notification/{{$notifi->id}}">رفض</a>
			   <span>
			
	        
			</p>
			<br/>
			<br/>

            </div>

            @endforeach

        </div>
    </div>        


@stop    