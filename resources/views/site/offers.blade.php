@extends('layout')

@section('title')
العروض
@stop
@section('head')

<style type="text/css">
  
  .offer-li {
    color: #ffa500;
    font-size: 18px;
    border: 1px solid #fff;
    padding: 5px;
  }
</style>
@stop

@section('content')


          <div style="background: #798992;" class="row">
            

            <div class="col-lg-12 col-md-12 col-sm12">
                <ul class="offers_ul">


                @foreach($things as $thing)

                  <div class="offer-block">
                  <?php
                  $id=$thing->id;
                  Session::put('id',$id);


                  ?>

                  <li>
                    <h3 class="offer-name btn btn-primary">{{$thing->thing}}</h3>

                    <h6>{{$thing->created_at}}</h6>
                    <img class="offer-img" src="../img/devhill/{{$thing->thing_pic}}" alt="img">
                    <span class="offer-btn">
                    <span class="btn btn-info offer-up"> <a href="/thing/update_view/{{Session::get('id')}}">تعديل</a></span>
                    <span class="btn btn-info offer-d"> <a href="/delete_thing/{{Session::get('id')}}">حزف</a></span>
                    </span>
                  </li>
                  </div>
                  @endforeach
                  
                  
                </ul>
            </div>
          </div>

@stop

