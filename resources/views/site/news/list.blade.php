@extends('site/app')
@section('title', 'News List')
@section('main-content')
  <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto" style=" margin-top: 100px; ">
          @foreach($result as $item)
            <div class="post-preview">
              <a href="{{ url('newsdetail/'.$item->slug) }}"><h2 class="post-title">{{ $item-> title}}</h2></a>
              <p class="post-meta">{{ $item-> published_date}}</p>
            </div>
            <hr>
          @endforeach
          <!-- Pager -->
          <div class="clearfix">
            {{ $result->links() }}
          </div>
        </div>
      </div>
    </div>

    <hr>

@endsection