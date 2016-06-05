@extends('layout')



@section('content')

  <!-- start main content top -->

<!--
  {!!Form::open()!!}

  {!!Form::text("thing_name","value",["class"=>"thing_name=>"])!!}

  Enter The Name Of Thing:
  {!!Form::close()!!}</br>
  Attache File: 
  {!!Form::file("thing_img")!!}
  {!!Form::submit("submit",["class"=>"btn btn-info"])!!}


  --> 



        <div class="content_top">
          <div class="row">
            

            <div class="col-lg-12 col-md-12 col-sm12">
              <div class="content_top_right">
                <ul class="featured_nav wow fadeInDown">

                @foreach($things as $thing)

                  <li>
                    <img src="img/devhill/{{$thing->thing_pic}}" alt="img">
                    <div class="title_caption">
                      <a href="/thing">
                      <h4> {{$thing->thing}}</h4>
                      

                      
                      {{substr($thing->thing_desc,0,100)}}...
                      

                        
                      </a>
                      
                    </div>
                  </li>
                  @endforeach
                  
                  
                </ul>
              </div>
            </div>
          </div>
        </div><!-- End main content top -->

@stop