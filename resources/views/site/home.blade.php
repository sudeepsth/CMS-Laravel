@extends('site/app')  

@section('title', 'Home')


@section('main-content')

  <!-- Main Content -->
  <section class="header_margin">
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
       <div class="row adspace newsticker">
          <!--col-1-->
          <div class="col-lg-1 col-md-2 col-sm-2 col-xs-3 adspace" style="background:red; color:white;">
             <label style="line-height: 18px; padding: 5px 0;">Latest</label>
          </div>
          <!--col-2-->
          <div class="col-lg-11 col-md-1 col-sm-10 col-xs-9">
             <div class="TickerNews" id="T1">
                <div class="ti_wrapper">
                   <div class="ti_slide">
                      <div class="ti_content">
                          @foreach($result['featurenews'] as $item)
                          <div class="ti_news"><a href="{{url('detail/'.$item->slug)}}"><span>
                            <img src="{{asset('photos/ads/tick_list_dot.png') }}"></span> 
                            {{$item->title}}</a></div>
                           
                           @endforeach

                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
     <div class="clearfix"></div>
    <!--Carousal-->
    <div class="col-lg-offset-0 col-lg-6 col-md-offset-0 col-md-6 col-sm-offset-1 col-sm-10 col-xs-offset-2 col-xs-10">
       <div class="row">
          <div id="myCarousel" class="carousel slide imagebox" data-ride="carousel">
             <!-- Indicators -->
             <ol class="carousel-indicators" >
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li></li>
                <li data-target="#myCarousel" data-slide-to="1" ></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
             </ol>
             <!-- Wrapper for slides -->
             <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive"  src="https://static.pexels.com/photos/33045/lion-wild-africa-african.jpg" alt="Lion" style="width:100%; height:490px">
                    <a href="http://zeenews.india.com/environment/australia-scientists-discover-remains-of-ancient-extinct-lion-species-2063865.html">
                    <span class="imagebox-desc">
                    Australia: Scientists discover remains of ancient extinct lion species
                    The remains were believed to belong to the mysterious marsupial lion.</span>
                    </a>
                 </div>

                @foreach($result['hotnews'] as $item)
                <div class="item"  style= "width: 100%; height: auto;">
                    <img class="img-responsive"  src="{{ asset("photos/shares/uploads/$item->image")}}" alt="Chicago" style="width:100%; height:490px">
                    <a href="{{url('detail/'.$item->slug)}}">
                      <span class="imagebox-desc">
                         {{$item->title}}</span>
                      </a>
                 </div> 
                @endforeach 
             </div>
             <!-- Left and right controls -->
             <a class="left carousel-control" href="#myCarousel" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left"></span>
             <span class="sr-only">Previous</span>
             </a>
             <a class="right carousel-control" href="#myCarousel" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right"></span>
             <span class="sr-only">Next</span>
             </a>
          </div>
       </div>
    </div>
     
    <!--Tab-->
    <div class="col-lg-offset-0 col-lg-4 col-md-offset-0 col-md-4 col-sm-offset-1 col-sm-7 col-xs-offset-1 col-xs-7">
       <div class="card">
          <ul class="nav nav-tabs" role="tablist">
             <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Popular</a></li>
             <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Trending</a></li>
             <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Latest</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
             <div role="tabpanel" class="tab-pane active" id="home">
                @foreach($result['popular'] as $popular)
                <div style="padding-bottom: 10px; padding-bottom: 10px;">
                   <a class="cardlink"  href="{{url('detail/'.$popular->slug)}}" style="padding-top: 20px;">
                    {{$popular->title}}
                   </a>
                </div>
                @endforeach
                
                <div class="more">
                   SEE ALL <i class="fa fa-angle-right"></i>
                </div>
             </div>
             <div role="tabpanel" class="tab-pane" id="trending">
                @foreach($result['popular'] as $popular)
                <div style="padding-bottom: 10px; padding-bottom: 10px;">
                   <a class="cardlink"  href="{{url('detail/'.$popular->slug)}}" style="padding-top: 20px;">
                    {{$popular->title}}
                   </a>
                </div>
                @endforeach
                
                <div class="more">
                   SEE ALL <i class="fa fa-angle-right"></i>
                </div>
             </div>

             <div role="tabpanel" class="tab-pane" id="latest">
                @foreach($result['latest'] as $latest)
                <div style="padding-bottom: 10px; padding-bottom: 10px;">
                   <a class="cardlink"  href="{{url('detail/'.$latest->slug)}}" style="padding-top: 20px;">
                    {{$latest->title}}
                   </a>
                </div>
                @endforeach
                
                <div class="more">
                   SEE ALL <i class="fa fa-angle-right"></i>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!--side ads-->
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
       <div class="row"><img src="{{asset('photos/ads/230_130.png') }}"></div>
       <div class="row"><img src="{{asset('photos/ads/230_130.png') }}"></div>
       <div class="row"><img src="{{asset('photos/ads/230_130.png') }}"></div>
    </div>
     
<!--
               <div class="clearfix"></div>

    <div class="col-lg-offset-0 col-lg-10 col-md-offset-0 col-md-10 col-sm-4 col-xs-4">
       <img class="img-responsive" src="image/Ads/1068_80.png">
   </div>
-->
          
      <div class="clearfix"></div>
     
     

     <div class="col-lg-offset-0 col-lg-10 col-md-offset-0 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-2 col-xs-10" style="margin-top: 20px;">
         
       <div class="category_line">Technology</div>
         
       <div class="row">
          @foreach($result['technology']->posts as $item)
            <div class="col-md-4">
             <div class="well well-sm wl" style="background-color: transparent;">
                <div  class="c_hr">
                   <img class="img-responsive" src="{{ asset("photos/shares/uploads/$item->image")}}">
                     <strong>
                       <a href="{{url('detail/'.$item->slug)}}">{{$item->title}}</a>
                        </strong><br>
                    <small> {{date('F d, Y', strtotime($item->published_date)) }}</small> | by
                    @foreach($item->category as $cat)
                    <a href="{{ url('category/'.$cat->slug)}}">{{$cat->category_name}}</a>
                    @endforeach
                 </div>
               
                <div style="padding-top:-15px">
                   
                 </div>
                 <div style="padding-top:10px">
                    {{$item->detail}}
                 </div>
                 
                 <div class="text-right">
                  <a href="{{url('detail/'.$item->slug)}}"> 
                  More
                  </a>
                 </div>
                 
             </div>
          </div>
          @endforeach
       </div>
           
       <div class="category_line">Politics</div>  
       <div class="row">
          @foreach($result['politics']->posts as $item)
            <div class="col-md-4">
             <div class="well well-sm wl" style="background-color: transparent;">
                <div  class="c_hr">
                   <img class="img-responsive" src="{{ asset("photos/shares/uploads/$item->image")}}">
                     <strong>
                       <a href="{{url('detail/'.$item->slug)}}">{{$item->title}}</a>
                        </strong><br>
                    <small> {{date('F d, Y', strtotime($item->published_date)) }}</small> | by
                    @foreach($item->category as $cat)
                    <a href="{{ url('category/'.$cat->slug)}}">{{$cat->category_name}}</a>
                    @endforeach
                 </div>
               
                <div style="padding-top:-15px">
                   
                 </div>
                 <div style="padding-top:10px">
                    {{$item->detail}}
                 </div>
                 
                 <div class="text-right">
                  <a href="{{url('detail/'.$item->slug)}}"> 
                  More
                  </a>
                 </div>
                 
             </div>
          </div>
          @endforeach
       </div>
        
       <div class="category_line">Health</div>  
       <div class="row">
          @foreach($result['health']->posts as $item)
            <div class="col-md-4">
             <div class="well well-sm wl" style="background-color: transparent;">
                <div  class="c_hr">
                   <img class="img-responsive" src="{{ asset("photos/shares/uploads/$item->image")}}">
                     <strong>
                       <a href="{{url('detail/'.$item->slug)}}">{{$item->title}}</a>
                        </strong><br>
                    <small> {{date('F d, Y', strtotime($item->published_date)) }}</small> | by
                    @foreach($item->category as $cat)
                    <a href="{{ url('category/'.$cat->slug)}}">{{$cat->category_name}}</a>
                    @endforeach
                 </div>
               
                <div style="padding-top:-15px">
                   
                 </div>
                 <div style="padding-top:10px">
                    {{$item->detail}}
                 </div>
                 
                 <div class="text-right">
                  <a href="{{url('detail/'.$item->slug)}}"> 
                  More
                  </a>
                 </div>
                 
             </div>
          </div>
          @endforeach
       </div>
        
         
     </div>
     
     <div class="col-lg-offset-0 col-lg-2 col-md-offset-0 col-md-2 col-sm-offset-1 col-sm-4 col-xs-offset-1 col-xs-4">
       <div class="row"><img src="{{asset('photos/ads/230_130.png') }}"></div>
    </div>
     <div class="col-lg-offset-0 col-lg-2 col-md-offset-0 col-md-2 col-sm-4 col-xs-4">
       <div class="row"><img src="{{asset('photos/ads/230_130.png') }}"></div>
    </div>

 </section>


@endsection