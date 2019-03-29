@extends('admin/app')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">{{ $result['page_header'] }}</h3>

    </div>
    <div class="box-body">
    	<table class="table table-hover table-responsive table-condensed">
    		<thead class="bg-primary">
    			<tr>
    				<th>S.No</th>
                    <th>Title</th>
                    <th>Deleted By</th>
                    <th>Deleted Date</th>
                    <th class="center-align">Action</th>

    			</tr>
    		</thead>
    		<tbody>
    			<?php $count = 1; ?>
                @foreach ($result['newslist'] as $item)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->users[0]->name }}</td>
                    <td>{{ $item->deleted_at->diffForHumans()}}</td>
                  
                    <td width="250px" class="center-align"><a href="{{ url('/my-admin/news/deletedpost/restore/'.$item->id) }}">Restore </a>&nbsp; | &nbsp; <a href="{{ url('/my-admin/news/deletedpost/permanentdelete/'.$item->id) }}" onclick=" return confirm('Are You Sure ???');">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>
<div class="clearfix"></div>

@endsection