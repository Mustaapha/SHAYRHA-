
@extends('layout')

@section('title')

 أشياء جارك

@stop

@section('content')

          <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm12">

                <ul class="main_ul">

                @foreach($neighbor_things as $thing)



                  <div class="main-block">

                  
                  <li>
                    <h3 class="main-name btn btn-primary">{{$thing->thing}}</h3>
                    <img class="main-img" src="{{asset('img/devhill/'.$thing->thing_pic)}}" alt="img">
                    <h4 class="main-desc">{{substr($thing->thing_desc,0,180)}}...</h4>
                    <span class="main-btn">
                    <span class="btn btn-info main-d">
                    @if (Auth::guest()) 
                  
                    <a href="/login">طلب العرض</a></span>
                    <span class="btn btn-info main-up"> <a href="{{url('/login')}}">التفاصيل</a></span>

                    @else

                     <a href="/get_thing/{{$thing->id}}/{{$thing->thing_pic}}/{{$thing->owner_id}}/{{$thing->thing}}/{{$thing->owner_name}}">طلب العرض</a></span>
                    <span class="btn  main-up"> <a href="/show_details/{{$thing->id}}/{{$thing->thing_pic}}/{{$thing->owner_id}}/{{$thing->thing}}/{{$thing->thing_desc}}/{{$thing->owner_name}}">التفاصيل</a></span>

                    @endif

                    </span>
                  </li>
                  </div>
                  @endforeach
                  
                  
                </ul>
            </div>
          </div>
          

@stop

