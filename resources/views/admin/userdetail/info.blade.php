@extends('admin/app')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="box">
    <div class="box-header with-border">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$result['postmonth']->count()}}</h3>

              <p>Total Post This Month</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-info">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$result['postweek']->count()}}</h3>

              <p>Total Post This Week</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-default">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$result['visitors']}}</h3>

              <p>Total  Visitors this month</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
     
    </div>
    
  </div>
</div>
<div class="clearfix"></div>

            <!-- Modal -->
        <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Top 5 Post of this month</h4>
              </div>
              <div class="modal-body">
                <? $count=0; ?>
                @foreach($result['thismonth'] as $thismonth)
                <small class="label pull-right bg-green">{{$thismonth->post_like}}</small>
                <p>{{++$count}}) {{$thismonth->title}}</p>
                @endforeach

                @if(!$result['thismonth']->count())
                No post this month
                @endif
              </div>
             
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


        <div class="modal modal-info fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Top 5 Post of this week</h4>
              </div>
              <div class="modal-body">
                <? $count=0; ?>
                @foreach($result['thisweek'] as $thisweek)
                <small class="label pull-right bg-green">{{$thisweek->post_like}}</small>
                <p>{{++$count}}) {{$thisweek->title}}</p>
              
            
                @endforeach

                @if(!$result['thisweek']->count())
                No post this week
                @endif
              </div>
             
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

@endsection