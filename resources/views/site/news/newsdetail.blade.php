@extends('site/app')
  

@section('title', 'Home')


@section('main-content')


  <!-- Main Content -->
  
    <section class="single">
      <div class="container">
        <div class="row">
          <div class="col-md-4 sidebar" id="sidebar">
            <aside>
              <div class="aside-body">
                <figure class="ads">
                  <img src="images/ad.png">
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
                        <img src="images/news/img16.jpg">
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
            <aside>
              <div class="aside-body">
                <form class="newsletter">
                  <div class="icon">
                    <i class="ion-ios-email-outline"></i>
                    <h1>Newsletter</h1>
                  </div>
                  <div class="input-group">
                    <input type="email" class="form-control email" placeholder="Your mail">
                    <div class="input-group-btn">
                      <button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
                    </div>
                  </div>
                  <p>By subscribing you will receive new articles in your email.</p>
                </form>
              </div>
            </aside>
          </div>
          <div class="col-md-8">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Film</li>
            </ol>
            <article class="article main-article">
              <header>
                <h1>{{ $result['newsdetail']->title }}</h1>
                <ul class="details">
                  <li>Posted on {{date('F d, Y', strtotime($result['newsdetail']->published_date)) }}</li>
                  <li><a>Film</a></li>
                  <li>By <a href="#">John Doe</a></li>
                </ul>
              </header>
              <div class="main">
                {!! $result['newsdetail']->description !!}
                <div class="addthis_inline_share_toolbox"></div>
              </div>
              <footer>
                <div class="col">
                  <ul class="tags">
                    <li><a href="#">Free Themes</a></li>
                    <li><a href="#">Bootstrap 3</a></li>
                    <li><a href="#">Responsive Web Design</a></li>
                    <li><a href="#">HTML5</a></li>
                    <li><a href="#">CSS3</a></li>
                    <li><a href="#">Web Design</a></li>
                  </ul>
                </div>
                <div class="col">
                  <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>{{$result['newsdetail']->post_like}}</div></a>
                </div>
              </footer>
            </article>
            
            <div class="line">
              <div>Author</div>
            </div>
            <div class="author">
              <figure>
                <img src="images/img01.jpg">
              </figure>
              <div class="details">
                <div class="job">Web Developer</div>
                <h3 class="name">John Doe</h3>
                <p>Nulla sagittis rhoncus nisi, vel gravida ante. Nunc lobortis condimentum elit, quis porta ipsum rhoncus vitae. Curabitur magna leo, porta vel fringilla gravida, consectetur in libero. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                <ul class="social trp sm">
                  <li>
                    <a href="#" class="facebook">
                      <svg><rect/></svg>
                      <i class="ion-social-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <svg><rect/></svg>
                      <i class="ion-social-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="youtube">
                      <svg><rect/></svg>
                      <i class="ion-social-youtube"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="googleplus">
                      <svg><rect/></svg>
                      <i class="ion-social-googleplus"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="line"><div>You May Also Like</div></div>
            <div class="row">
              <article class="article related col-md-6 col-sm-6 col-xs-12">
                <div class="inner">
                  <figure>
                    <a href="#">
                      <img src="images/news/img03.jpg">
                    </a>
                  </figure>
                  <div class="padding">
                    <h2><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    <div class="detail">
                      <div class="category"><a href="category.html">Lifestyle</a></div>
                      <div class="time">December 26, 2016</div>
                    </div>
                  </div>
                </div>
              </article>
              <article class="article related col-md-6 col-sm-6 col-xs-12">
                <div class="inner">
                  <figure>
                    <a href="#">
                      <img src="images/news/img08.jpg">
                    </a>
                  </figure>
                  <div class="padding">
                    <h2><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                    <div class="detail">
                      <div class="category"><a href="category.html">Lifestyle</a></div>
                      <div class="time">December 26, 2016</div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="line thin"></div>
            <div class="comments">
             <a href="#">Write a Response</a></h2>
             <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://onlinenews-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<script id="dsq-count-scr" src="//onlinenews-1.disqus.com/count.js" async></script>
             
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection