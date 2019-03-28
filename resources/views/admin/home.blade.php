@extends('admin/app')

@section('content-header', 'Our Team')

@section('content')


      <!-- Default box -->

      <div class="row">
      @foreach($userlist as $user)
       <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">{{$user->name}}</h3>
              <h5 class="widget-user-desc">{{$user->profile->education}}</h5>
            </div>
            <div class="widget-user-image">
              @if($user->profile->image == NULL)
             
              <img class="img-circle" src="{{ asset("photos/profile/1514394467-images.png")}}" alt="User Avatar">
              @else
              <img class="img-circle" src="{{ asset("photos/profile/".$user->profile->image)}}" alt="User Avatar">
              @endif
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">{{$user->created_at->diffForHumans()}}</h5>
                    <span class="description-text">Join</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">{{$user->profile->post}}</h5>
                    <span class="description-text">Total Post</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">


                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        @endforeach
     @endsection