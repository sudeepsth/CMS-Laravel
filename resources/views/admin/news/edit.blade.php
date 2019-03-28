@extends('admin/app')

@section('content')
<?php 
    $record = $result['record']; 
    $recordcategory = $result['record']->category; 
    $recordsector = $result['record']->sector; 
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $result['page_header'] }}</h3>
          <span class="pull-right"><a href="{{ route('news.index') }}" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;  View List </a></span>
        </div>
        <div class="box-body">
            <form class="form-horizontal" method="POST" action="{{ route('news.update', $record->id) }} " enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $record->title }}" required >
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ $record->slug }}" required >
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="my-editor" class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required >{{ $record->description }}</textarea>
                        </div>
                    </div>                    
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="published_date">Published Date</label>
                            <input type="text" class="form-control" id="published_date" name="published_date" value="{{ $record->published_date }}" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="ordering">Order</label>
                            <input type="text" class="form-control" id="ordering" name="ordering" value="{{ $record->ordering }}" required>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <textarea class="form-control" name="detail" placeholder="Enter detail of the news" rows="7">{{$record->detail}}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="published_date">Choose Category</label>
                            <div style="margin-top: 10px; height: 200px; overflow-y: scroll;">
                                <ul class="list-unstyled">
                                    @foreach( $result['categorylist'] as $cat)
                                        <li><input type="checkbox" name="category[]" value="{{ $cat->id }}"
                                           @foreach ($recordcategory as $postcat)
                                               @if ($postcat->id == $cat->id)
                                                   checked 
                                               @endif
                                           @endforeach
                                        > {{ $cat->category_name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="Type">News Type</label>
                                <ul class="list-unstyled">
                                    <li><input type="checkbox" name="feature_news" value="1" @if($record->feature_news==1) checked @endif> Featured News</li>
                                    <li><input type="checkbox" name="hot_news" value="1" @if($record->hot_news==1) checked @endif> Hot News</li> 
                                </ul>
                          
                        </div>
                    </div>


                    <h5>&nbsp;</h5>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="image">Featured Image</label>
                            <input type="file" id="image" name="image">
                            <?php if (isset($record->image) && strlen($record->image)>0) { ?>
                                <a href="">Current Image: <?php echo '<strong/>' . $record->image; ?></a>
                                <?php } 
                                else{  ?>
                                    No current Image
                                <?php } ?>
                            <input type="hidden" name="image_file" id="image_file" value="<?php echo isset($record->image) ? $record->image : ''; ?>" />
                        </div>
                    </div>    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="statusid" class="form-control">
                                <option value="1" <?= isset($record->status) && ($record->status == '1')? 'selected' : '' ?> >Publish</option>
                                <option value="0" <?= isset($record->status) && ($record->status == '0')? 'selected' : '' ?> >UnPublish</option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <div class="form-group">
                            <button type="submit" class="btn btn-success">Update</button>
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