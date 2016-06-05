@extends('layout')

@section('title')
جيرانك
@stop

@section('head')

<style type="text/css">
  
  .neighbor-li {
    color: #ffa500;
    font-size: 18px;
    border: 1px solid #fff;
    padding: 5px;
  }
</style>
@stop

@section('content')

<div style="background: #798992" class="row">
            

            <div class="col-lg-12 col-md-12 col-sm12">




                @foreach($neighbors as $neighbor)
                @continue($neighbor->id==Auth::user()->id)
                  
               <div class="garak">
               <h6 id="gark-name">{{$neighbor->name}}</h6>
               <img id="gark-img" src="{{asset('img/devhill/'.$neighbor->user_pic)}}" height="150" width="150" />
               <a href="/view/neighbor/things/{{$neighbor->id}}"><h3 id="gark-add">رؤية الأشياء التى عرضها</h3></a>
   
               </div> 


               @endforeach
                  
                  
            </div>
</div>



@stop