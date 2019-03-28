@extends('admin/app')

@section('content')
<div class="col-lg-8 col-md-8  col-sm-12 col-xs-12">
  <div class="box">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-xs-12">           
            <!-- /.box-header -->
            <div class="box-body">
                <a href="" >Delete All</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Notification</th>
                  {{--  <th><a href="" >Delete All</a></th>  --}}
                  
                </tr>
                </thead>
                <tbody>
                @foreach(Auth::user()->notifications as $notification)
                <tr>
                  <td>{{$notification->data['data']}}</td>
                  
                </tr>
                @endforeach   
            
                </tbody>
                <tfoot>
                  <tr></tr>
                </tfoot>
              </table>dfdfd
            </div>
            <!-- /.box-body -->
          
        </div>
        <!-- /.col -->
  </div>
</div></div>
<div class="clearfix"></div>
<script type="text/javascript">
  $(document).ready(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection