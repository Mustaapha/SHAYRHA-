@extends('layout')

@section('title')

الطلبات

@stop

@section('head')

<style type="text/css">
  
  .request-li {
    color: #ffa500;
    font-size: 18px;
    border: 1px solid #fff;
    padding: 5px;
  }
</style>
@stop


@section('content')


          <div class="row">
            

            <div class="col-lg-12 col-md-12 col-sm12">
                <ul class="offers_ul">


                @foreach($requests as $request)

                  <div class="offer-block">
                  
                  <li>
                    <h3 class="offer-name btn btn-primary">{{$request->offer}}</h3>
                    <h6>{{$request->created_at}}</h6>
                    <img class="offer-img" src="../img/devhill/{{$request->offer_pic}}" alt="img">
                    <span class="offer-btn">
                    <span class="btn btn-info offer-up"> <a href="update_request/{{$request->id}}">تعديل</a></span>
                    <span class="btn btn-info offer-d"> <a href="/delete_request/{{$request->id}}">حزف</a></span>
                    </span>
                  </li>
                  </div>
                  @endforeach
                  
                  
                </ul>
            </div>
          </div>

@stop

