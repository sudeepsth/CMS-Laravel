@extends('admin/app')

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $result['page_header'] }}</h3>
          <span class="pull-right"><a href="{{ route('news.index') }}" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;  View List </a></span>
        </div>
        <div class="box-body">
            <form class="form-horizontal" method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required >
                        </div>
                    </div>
                    <h2>&nbsp;</h2>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="my-editor" class="textarea" name="description" placeholder="Place some text here" ></textarea>
                        </div>
                    </div>                    
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="published_date">Published Date</label>
                            <input type="text" class="form-control" id="published_date" name="published_date" value="{{ $result['date'] }}" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="ordering">Order</label>
                            <input type="text" class="form-control" id="ordering" name="ordering" placeholder="Enter Order Number to show in forntend">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <textarea class="form-control" name="detail" placeholder="Enter detail of the news" rows="7"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="published_date">Choose Category</label>
                            <div style="margin-top: 10px; height: 200px; overflow-y: scroll;">
                                <ul class="list-unstyled">
                                    @foreach( $result['categorylist'] as $cat)
                                        <li><input type="checkbox" name="category[]" value="{{ $cat->id }}"> {{ $cat->category_name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="Type">News Type</label>
                                <ul class="list-unstyled">
                                    <li><input type="checkbox" name="feature_news" value="1"> Featured News</li>
                                    <li><input type="checkbox" name="hot_news" value="1"> Hot News</li> 
                                </ul>
                          
                        </div>
                    </div>
                    <input type="hidden" name="userid" value="{{Auth::user()->id}}">
                   
                    <h5>&nbsp;</h5>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="image">Featured Image</label>
                            <input type="file" id="image" name="image">
                        </div>
                    </div>                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="statusid" class="form-control">
                                <option value="1">Publish</option>
                                <option value="0">UnPublish</option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
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
                
                $('#published_date').val(datetext);
            },
        });
    });
</script>


@endsection