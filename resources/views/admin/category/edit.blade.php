@extends('admin/app')

@section('content')
<?php $record = $result['record']; ?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $result['page_header'] }}</h3>
          <span class="pull-right"><a href="{{ route('category.index') }}" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;  View List </a></span>
        </div>
        <div class="box-body">
            <form class="form-horizontal" method="POST" action="{{ route('category.update', $record->id) }} ">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $record->category_name }}" >
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="slug">Category Url (Slug)</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $record->slug }}" >
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="statusid" class="form-control">
                            <option value="1" <?= isset($record->status) && ($record->status == '1')? 'selected' : '' ?> >Publish</option>
                            <option value="0" <?= isset($record->status) && ($record->status == '0')? 'selected' : '' ?> >UnPublish</option>
                        </select>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="clearfix"></div>



<script type="text/javascript">
    $(document).ready(function() {
        $("#published_date").datepicker({ 
            dateFormat: 'yy-mm-dd',
            onSelect: function(datetext){
                var d = new Date(); // for now
                var h = d.getHours();
                    h = (h < 10) ? ("0" + h) : h ;

                    var m = d.getMinutes();
                m = (m < 10) ? ("0" + m) : m ;

                var s = d.getSeconds();
                s = (s < 10) ? ("0" + s) : s ;

                    datetext = datetext + " " + h + ":" + m + ":" + s;
                $('#published_date').val(datetext);
            },
        });
    });
</script>


@endsection