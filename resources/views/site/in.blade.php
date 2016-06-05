@extends('layout')

@section('title')

 الرئيسية

@stop

@section('head')



<style type="text/css">
  
  .index-li {
    color: #ffa500;
    font-size: 18px;
    border: 1px solid #fff;
    padding: 5px;

  }
</style>
@stop


@section('content')

         <!-- start special quote 
  <section id="specialQuote">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 wow bounceInLeft">
          <p>Pairing substantial savings in time and money with the ease and reliability of doing it in-house, ever since… we invented it</p>
        </div>
      </div>
    </div>
  </section>
   End special quote -->



  <!-- start client testimonial -->
  <section id="testimonial">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="testimonial_area wow bounceIn">
            <div class="client_title">
              <hr>
              <h2>ماذا <span>قدم جيرانك</span></h2>
            </div>
            <ul class="testimon_nav">
              @foreach($things as $thing)
              <li>
               <div class="testimonial_content">
                  <blockquote>
                  <h3 class="main-name btn btn-primary">{{$thing->thing}}</h3> 
                  <img class="main-img" src="../img/devhill/{{$thing->thing_pic}}" alt="img">
                  <small>نُشر بواسطة :{{$thing->owner_name}}</small>
                  <small>بتاريخ:{{$thing->created_at}}</small>
                  <h6 class="main-desc">{{substr($thing->thing_desc,0,180)}}...</h6>

                  <span class="btn btn-info main-d">
                    @if (Auth::guest()) 
                  
                    <a href="/login">طلب العرض</a></span>
                    <span class="btn btn-info main-up"> <a href="{{url('/login')}}">التفاصيل</a></span>

                    @else

                     <a href="/get_thing/{{$thing->id}}/{{$thing->thing_pic}}/{{$thing->owner_id}}/{{$thing->thing}}/{{$thing->owner_name}}">طلب العرض</a></span>
                    <span class="btn  main-up"> <a href="show_details/{{$thing->id}}/{{$thing->thing_pic}}/{{$thing->owner_id}}/{{$thing->thing}}/{{$thing->thing_desc}}/{{$thing->owner_name}}">التفاصيل</a></span>

                    @endif

                    </span>



                  </blockquote>
                  <div class="client_img">
                    <img src="{{asset('img/profiles_img/'.$thing->owner_pic)}}" alt="img">
                  </div>
               </div>
              </li>


              @endforeach
             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End client testimonial -->  

  <div class="row text-center">

   {!! $things->render() !!}

  </div>

@stop



