<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHAYRHA -
    @yield('title')



    </title>


   <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- for fontawesome icon css file -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- for content animate css file -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- google fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
     <!-- slick slider css file -->
    <link href="{{asset('css/slick.css')}}" rel="stylesheet" type='text/css'>     
    <!-- <link href="css/theme-red.css" rel="stylesheet"> -->  
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" type='text/css'>   
    <!-- main site css file -->    
    <link href="{{asset('css/style.css')}}" rel="stylesheet type='text/css'">

    @yield('head')
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
  <!-- =========================
    //////////////This Theme Design and Developed //////////////////////
    //////////// by www.wpfreeware.com======================-->

  <!-- Preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- End Preloader -->
   
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  
  <div class="container">
    <!-- start header area -->
    <header id="header">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <!-- start header top -->
          <div class="header_top">
            <div class="header_top_left">
              <ul class="top_nav">
              @if(Auth::guest())
                <li><a href="/">الرئيسية</a></li>
                <li><a href="/login">تسجيل الدخول</a></li>
                <li><a href="/register">انشاء حساب</a></li>

                

                @endif
              </ul>
            </div>
            <div class="header_top_right">
              <form class="search_form">
                <input type="text" placeholder="Text to Search">
                <input type="submit" value="">
              </form>
            </div>
          </div><!-- End header top -->
          <!-- start header bottom -->
         <!-- <div class="header_bottom">
          
            <div class="header_bottom_left">
            
            <a href="http://wpfreeware.com"><img class="logo" src="img/logo1.jpg"/></a>
            </div>
           
           
          </div>  -->
          <!-- End header bottom -->
           
           
        </div>
      </div>
    </header><!-- End header area -->




     <!-- Static navbar -->
      <div id="navarea">

        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>             
            </div>

            
             <div class="header_bottom_left">
              <a href="http://wpfreeware.com"><img width="250" height="100"  class="logo2" src={{asset('img/logo4.jpg')}} alt="img"></a>
            </div>
            
            <div id="navbar" class="navbar-collapse collapse" style="float: right;border: 0">
              <ul class="nav navbar-nav custom_nav">
               @if (Auth::guest())
                
                <li><a href="/login">تسجيل الدخول</a></li>
                <li><a href="/register"> إنشاء حساب</a></li>
                <li><a href="/home">جولة فى شيرها </a></li>
               
                @else

                <li><a href="/adminpanel/add/comment">اتصل بنا </a></li>

                <!--
                <li class=""><a href="shehab.php">شهاب</a></li>              
                <li><a href="fael_kher.php">فاعل خير </a></li>
                -->
                <li><a href="/notification_replay/view"><span class="notifi-reply-li">الردود</span></a></li>
                <li><a href="/notification/view"><span class="notifi-li">الاشعارات</span></a></li>
                <li><a href="/requests{{Auth::user()->id}}"><span class="request-li">الطلبات</span></a></li>
                <li><a href="/things{{ Auth::user()->id}}"><span class="offer-li">العروض</span> </a></li>
               <li><a href="{{url('/thing')}}"><span class="add-offer-li">إضافة عرض</span></a></li>
               <li><a href="/neighbors{{Auth::user()->id}}"><span class="neighbor-li">جيرانك</span></a></li>
               <li id="li-in"><a href="{{url('/home')}}"><span class="index-li ">الرئيسية </span></a></li>
                <li  class=" p-li dropdown">
                  <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{asset('img/profiles_img/'.Auth::user()->user_pic)}}" class="profile-pic">
                  <span class="my-shirha">{{ Auth::user()->user_name}}</span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="archive1.html"><span class="">الأعدادات</a></span></li>
                    {!! Form::open( [ 'url' => '/change/profile'. Auth::user()->id,'method'=>'PATCH','files' =>'true' ]) !!}
                    {!! csrf_field() !!}
                    <li><a href="#"><span class="">{!!Form::file("profile_pic",["class"=>"form-control"])!!}{!!Form::submit("تغيير الصورة الشخصية")!!}</a></span></li>
                    {!!Form::close()!!}
                    <li><a href="{{url('/profile/'.Auth::user()->id)}}">الصفحة الشخصية</a></li>
                    <li><a href="{{ url('/logout') }}">تسجيل الخروج</a></li>   

               @endif             
                  </ul>
                </li>       
              </ul>           
            </div><!--/.nav-collapse -->
      
          </div><!--/.container-fluid -->
        </nav>
      </div>




 <!-- start site main content -->
      <section id="mainContent">
      
        @yield('content')


      </section><!-- End site main content -->












  </div> <!-- /.container -->
    <footer style="direction: rtl;" id="footer">
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="single_footer_top wow fadeInLeft">
                <h2 class="title-footer">صور من مُجتمع شيرها</h2>
                <ul class="flicker_nav">
                  <li>
                      <a href="#"><img src="{{asset('img/devhill/1.jpg')}}" alt="img"></a>
                  </li>                 
                  <li>
                      <a href="#"><img src="{{asset('img/devhill/2.png')}}" alt="img"></a>
                  </li>
                   <li>
                      <a href="#"><img src="{{asset('img/devhill/3.jpg')}}" alt="img"></a>
                  </li>                 
                  <li>
                      <a href="#"><img src="{{asset('img/devhill/4.jpg')}}" alt="img"></a>
                  </li>
                   <li>
                      <a href="#"><img src="{{asset('img/devhill/5.jpg')}}" alt="img"></a>
                  </li>                 
                  <li>
                     <a href="#"><img src="{{asset('img/devhill/6.png')}}" alt="img"></a>
                  </li>
                   <li>
                      <a href="#"><img src="{{asset('img/devhill/7.jpg')}}" alt="img"></a>
                  </li>                 
                  <li>
                     <a href="#"><img src="{{asset('img/devhill/1.jpg')}}" alt="img"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="single_footer_top wow fadeInDown">
                <h2 class="title-footer">مُتفرقات</h2>
                <ul class="labels_nav">
                  <li><a href="#">ملابس </a></li>
                  <li><a href="#">أدوات منزلية </a></li>
                  <li><a href="#">أجهزة اتصال</a></li>
                  <li><a href="#">أدوات كهربائية</a></li>
                  <li><a href="#">أدوات رياضية</a></li>
                  <li><a href="#">تحف أثرية</a></li>
                  <li><a href="#">تبرعات</a></li>
                  <li><a href="#">مساعدة فقراء</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="single_footer_top wow fadeInRight">
                <h2 class="title-footer">من نحن</h2>
                <p class="footer-we-are">نحن أصدقاء شهاب قد قُمنا بتنفيذ هذا الموقع كصدقة جارية على صديقنا شهاب رحمه الله عليه نسألكم الدعاء له ان يُدخله ربنا فسيح جناتة .   </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="footer_bottom_left">
                <p>Copyright © 2016 <a href="https://www.facebook.com/mostafa.m.tefa.5">Asdekaa Shehab </a></p>
              </div>   
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="footer_bottom_right">
                <p>Developed BY <a href="https://eg.linkedin.com/in/mustapha-mohamed-a112ab120
">SHAYRHA TEAM</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  <!-- jQuery google CDN Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
  <!-- For content animatin  -->
  <script src="{{asset('js/wow.min.js')}}"></script>
  <!-- bootstrap js file -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script> 
  <!-- slick slider js file -->
  <script src="{{asset('js/slick.min.js')}}"></script> 
  
    <!-- custom js file include -->
  <script src="{{asset('js/custom.js')}}"></script> 


  @yield('footer')

  <!-- =========================
        //////////////This Theme Design and Developed //////////////////////
        //////////// by www.wpfreeware.com======================-->
    
      
  </body>
</html>