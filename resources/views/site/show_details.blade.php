@extends('layout')

@section('title')
{{$thingInfo['name']}} عرض 
@stop

@section('content')
<div style="background: #798992" class="container">
<div style="float: right;direction: rtl;background:#ddd;margin: 10px;border: 1px solid orange;margin-right: 40px" class="row">
            
            <div class="col-lg-12 col-md-12 col-sm12">

                <div class="col-lg-6 col-md-6 col-sm12">
                    <img id="Spic" src="{{ asset('img/devhill/'.$thingInfo['pic'])}}"/>
               </div>

               <div class="col-lg-6 col-md-6 col-sm12">
               <div id="sDetailsAll">
                 <h1 id="sThingName">
                  <span id="sTitle">الشئ المعروض: </span>{{$thingInfo['name']}}
                 </h1>
                 <h1 id="sThingName"><span id="sTitle"> المالك: </span>{{$thingInfo['owner']}}</h1>
                 <h1 id="sThingName"><span id="sTitle">العنوان: </span>عامر عفيفى - صلاح سالم - بنى سويف </h1>

                 <p id="sDetails">{{$thingInfo['desc']}}</p>
        
                 </div>
    
            <p id="seeIwant">
           
                <a style="font-weight: bold;color: #ffa500;font-size:20px "class=" btn btn-primary  "  href="/get_thing/{{$thingInfo['id']}}/{{$thingInfo['pic']}}/{{$thingInfo['owner']}}/{{$thingInfo['name']}}">طلب العرض</a>
             
            </p>        

            	
            </div>
            </div>
 







</div>
</div>
@stop


