<div class="row" style="padding-top:0px; background-color: black; color: white;">
  <label style="padding-left:30px">Date:</label>
  <label style="padding-right:30px; float:right;">AdvertiseWithUs</label>
</div>
<header>   
  <!--Ad space-->
  <div class="header_margin">
     <div class="row adspace">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <img class="img-responsive" src="{{asset('photos/ads/1068_80.png') }}">
        </div>
     </div>
     <!--loo and ads-->
     <div class="row adspace">
        <!--Col-left(logo)-->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <img id="logo" class="img-responsive" src="{{asset('photos/logo.png') }}" >
        </div>
        <!--(Ad Banner)-->
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <img class="img-responsive" src="{{asset('photos/ads/400_80.png') }}" >
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <img class="img-responsive" src="{{asset('photos/ads/400_80.png') }}" >
           </div>
        </div>
     </div>
  </div>
  <!--Multiple row container 2(Nav Bar) -->
  <div class="row adspace">
     <nav class="navbar navbar-default" data-spy="affix" data-offset-top="150" style="background-color: white; border: 0px" >
        <div class="container-fluid">
           <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="#"><b>
              <i class="fa fa-home"></i></b></a>
           </div>
           <div class="collapse navbar-collapse header_margin" id="myNavbar" >
              <ul class="nav navbar-nav">
                 <li class="nav-list"><a href="{{ url('category/technology')}}">Technology</a></li>
                 <li class="nav-list"><a href="{{ url('category/entertainment')}}">Entertainment</a></li>
                 <li class="nav-list"><a href="#">Sports</a></li>
                 <li class="nav-list"><a href="#">Science</a></li>
                 <li class="nav-list"><a href="#">Business</a></li>
                 <li class="nav-list dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li><a href="#">Life</a></li>
                       <li><a href="#">Tours and Travels</a></li>
                       <li><a href="#">Health</a></li>
                    </ul>
                 </li>
              </ul>
              <ul  class="navbar-form navbar-right nav-list">
                 <form action="https://www.facebook.com/">
                    <div class="row">
                       <input type="text" class="form-control" placeholder="Search" width="100%">
                       <button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
                    </div>
                 </form>
              </ul>
           </div>
        </div>
     </nav>
  </div>
</header>
