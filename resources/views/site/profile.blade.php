@extends('layout')

@section('title')

 الصفحة الشخصية

@stop

@section('head')


@stop


@section('content')


<div class="container">
<div class="row">
<h3 style="font-family:tahoma;font-size:16px;float:right;margin-right:500px;font-weight:bold;color:#fff"> {{Auth::user()->address}} </h3>
<br/>

<h3 style="font-family:tahoma;font-size:14px;float:right;margin-right:-250px;color:#ddd">قد سجلت معنا منذ :{{Auth::user()->created_at}} </h3>
<!-- code start -->
<div class="twPc-div">
    <a style="background-image: url({{asset('img/bg.png')}});" class="twPc-bg twPc-block"></a>



  <div>
    <div class="twPc-button">
            <!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
           
            <!-- Twitter Button --> 


    </div>

    <a title="Mert Salih Kaplan" href="https://twitter.com/mertskaplan" class="twPc-avatarLink">
      <img alt="Mert Salih Kaplan" src="{{asset('img/profiles_img/'.Auth::user()->user_pic)}}" class="twPc-avatarImg">
    </a>

    <div class="twPc-divUser">

      <div class="twPc-divName">
        <a href="https://twitter.com/mertskaplan">{{Auth::user()->name}}</a>
      </div>
     
    </div>

    <div class="twPc-divStats">
      <ul class="twPc-Arrange">
        <li class="twPc-ArrangeSizeFit">
          <a href="https://twitter.com/mertskaplan" title="9.840 Tweet">
            <span class="twPc-StatLabel twPc-block">الجيران</span>
            <span class="twPc-StatValue">{{countt()}}</span>
          </a>
        </li>
        <li class="twPc-ArrangeSizeFit">
          <a href="https://twitter.com/mertskaplan/following" title="885 Following">
            <span class="twPc-StatLabel twPc-block">الطلبات </span>
            <span class="twPc-StatValue">{{countreq()}}</span>
          </a>
        </li>
        <li class="twPc-ArrangeSizeFit">
          <a href="{{url('/profile/offers')}}" title="1.810 Followers">
            <span class="twPc-StatLabel twPc-block">المعروضات</span>
            <span class="twPc-StatValue">{{countoffer()}}</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

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

</div>
<!-- code end -->


</div>




</div>



@stop