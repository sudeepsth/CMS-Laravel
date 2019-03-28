@extends('site/app')
  

@section('title', 'Home')


@section('main-content')

<?php $category = $result['category'];
$posts = $result['category']->posts;
 ?>
  <!-- Main Content -->
  
    <section class="category">
      <div class="container">
        <div class="row">
          <div class="col-md-9 text-left">
            <div class="row">
              <div class="col-md-12">        
               
                <h1 class="page-title">Category: 
                            {{$category->category_name}}
                </h1>
                <p class="page-subtitle">Showing all posts with category <i>{{$category->category_name}}</i></p>
              </div>
            </div>
            <div class="line"></div>
            <div class="row">

              @foreach($posts as $item)
              <article class="col-md-12 article-list">
                <div class="inner">
                  <figure>
                    <a href="single.html">
                      <img src="{{ asset("photos/shares/uploads/$item->image")}}" width=300 height=215 alt="{{$result['category']->category_name}}">
                    </a>
                  </figure>
                  <div class="details">
                    <div class="detail">
                      <div class="category">
                       <a href="{{ url('category/'.$category->slug)}}">{{$category->category_name}}</a>
                      </div>
                      <div class="time">{{date('F d, Y', strtotime($item->published_date)) }}</div>
                    </div>
                    <h1><a href="single.html">{{$item->title}}</a></h1>
                    <p>
                      {{$item->detail}}
                    </p>
                    <footer>
                      <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>237</div></a>
                      <a class="btn btn-primary more" href="single.html">
                        <div>More</div>
                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                      </a>
                    </footer>
                  </div>
                </div>
              </article>
             @endforeach
             
              
              <div class="col-md-12 text-center">
                <ul class="pagination">
                  <li class="prev"><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">...</a></li>
                  <li><a href="#">97</a></li>
                  <li class="next"><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
                </ul>
                <div class="pagination-help-text">
                  Showing 8 results of 776 &mdash; Page 1
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 sidebar">
            <aside>
              <div class="aside-body">
                <figure class="ads">
                  <a href="single.html">
                    <img src="images/ad.png">
                  </a>
                  <figcaption>Advertisement</figcaption>
                </figure>
              </div>
            </aside>
            <aside>
              <h1 class="aside-title">Recent Post</h1>
              <div class="aside-body">
                <article class="article-fw">
                  <div class="inner">
                    <figure>
                      <a href="single.html">
                        <img src="images/news/img12.jpg">
                      </a>
                    </figure>
                    <div class="details">
                      <h1><a href="single.html">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit</a></h1>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                      </p>
                      <div class="detail">
                        <div class="time">December 26, 2016</div>
                        <div class="category"><a href="category.html">Lifestyle</a></div>
                      </div>
                    </div>
                  </div>
                </article>
                <div class="line"></div>
                <article class="article-mini">
                  <div class="inner">
                  <figure>
                    <a href="single.html">
                      <img src="images/news/img05.jpg">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                    <div class="detail">
                      <div class="category"><a href="category.html">Lifestyle</a></div>
                      <div class="time">December 22, 2016</div>
                    </div>
                  </div>
                  </div>
                </article>
                <article class="article-mini">
                  <div class="inner">
                    <figure>
                      <a href="single.html">
                        <img src="images/news/img02.jpg">
                      </a>
                    </figure>
                    <div class="padding">
                      <h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                      <div class="detail">
                        <div class="category"><a href="category.html">Travel</a></div>
                        <div class="time">December 21, 2016</div>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="article-mini">
                  <div class="inner">
                    <figure>
                      <a href="single.html">
                        <img src="images/news/img13.jpg">
                      </a>
                    </figure>
                    <div class="padding">
                      <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                      <div class="detail">
                        <div class="category"><a href="category.html">International</a></div>
                        <div class="time">December 20, 2016</div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </aside>
          
          </div>
        </div>
      </div>
    </section>

@endsection