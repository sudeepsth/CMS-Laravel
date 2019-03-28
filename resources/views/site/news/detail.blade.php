@extends('site/app')
@section('title', $result['newsdetail']->title )
@section('main-content')
  <!-- Main Content -->
    <div class="container" style="margin-top: 100px;">
      <div class="row">
        <div class="col-lg-9 col-md-9 mx-auto" >
          <h2>{{ $result['newsdetail']->title }}</h2>
          {!! $result['newsdetail']->description !!}
          <hr>
          <div class="clearfix">
            <?php if (!empty($result['previouspost']->id)) { ?>
              <a class="btn btn-secondary float-left" href="{{ url('newsdetail/'.$result['previouspost']->slug) }}">&larr; PRevious Posts</a>
            <?php } ?>
            <?php if (!empty($result['nextpost']->id)) { ?>
              <a class="btn btn-secondary float-right" href="{{ url('newsdetail/'.$result['nextpost']->slug) }}">Next Posts &rarr;</a>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <ul>
            @foreach($result['news_list'] as $item)
              <li>
                <a href="{{ url('newsdetail/'.$item->slug) }}"><h6 class="post-title">{{ $item->title }}</h6></a>
                <p class="post-meta">{{ $item->published_date }}</p>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <hr>

@endsection