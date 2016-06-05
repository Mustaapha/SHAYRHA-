
            	<img height="600" width="600" class="det-img" src="{{ asset('img/devhill/'.$thingInfo['pic'])}}">
                	</div>

                <div class="col-lg-4 col-md-4 col-sm12">

                	<h1 class="det-name btn-primary "><span class="det-title">االعرض :</span>{{$thingInfo['name']}}</h1>
                	<h1 class="det-name btn-primary "><span class="det-title">مالك :</span>{{$thingInfo['owner']}}</h1>
            	<p class="det-desc">{{$thingInfo['desc']}}</p>


            	<span class="main-btn">
                    <span class="btn btn-info main-d">
                    
                     <a href="get_thing/{{$thingInfo['id']}}/{{$thingInfo['pic']}}/{{$thingInfo['owner']}}/{{$thingInfo['name']}}">طلب العرض</a></span>
                    


                    </span>
            7
            