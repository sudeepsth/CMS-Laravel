@extends('admin/app')

{{-- @section('content-header', 'User Registration') --}}

@section('content')
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">User Profile</h3>
          
    </div>
    <div class="box-body">
      <form class="form-horizontal" method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Profile</a></li>
              <li><a href="#tab_2" data-toggle="tab">About</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
                  <input id="name" type="text" class="form-control" placeholder="Enter Full Name " name="name" value="{{ $user->name }}" required autofocus>

                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control" placeholder="Enter Email Address" name="email" value="{{ $user->email }}" required>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

<div class="form-group">
          <label for="password" class="col-md-4 control-label">&nbsp;</label>
              <div class="col-md-6">
                  <input id="changepwd" type="checkbox" name="changepwd" >Change Password
              </div>
</div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

             
              <label for="password" class="col-md-4 control-label">New Password</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" disabled>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-success">Update</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
              </div>
          </div>
              </div>


              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                        <div class="form-group">
                         <div class="col-md-6">
                           <img align="right" src="{{ asset("photos/profile/".$user->profile->image)}}" width="180" height="180">
                           
                          </div>
                        </div>
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">

                            <label for="image" class="col-md-4 control-label">Profile picture</label>
                            <div class="col-md-6">

                            <input type="file" id="image" name="image" class="form-control">
                            <input type="hidden" name="image_file" id="image_file" value="<?php echo isset($user->profile->image) ? $user->profile->image : ''; ?>" />
                          </div>
                        </div>

                <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
              <label for="education" class="col-md-4 control-label">Education</label>

              <div class="col-md-6">
                  <input id="education" type="text" class="form-control" placeholder="You qualification" name="education" value="{{ $user->profile->education }}" >

                  @if ($errors->has('education'))
                      <span class="help-block">
                          <strong>{{ $errors->first('education') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
              <label for="about" class="col-md-4 control-label">About Me</label>

              <div class="col-md-6">
                  <textarea id="about" class="form-control" placeholder="About Me" rows="4" name="about" >{{ $user->profile->about }}</textarea>
                  @if ($errors->has('about'))
                      <span class="help-block">
                          <strong>{{ $errors->first('about') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-success">Update</button>
              </div>
          </div>

              </div>
              <!-- /.tab-pane -->

              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

         
      </form>
    </div>
  </div>
</div>
<div class="clearfix"></div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#changepwd').removeAttr('checked');
      $('#changepwd').click(function () {
          //check if checkbox is checked
        if ($(this).is(':checked')) {        
            $('#password').removeAttr('disabled'); //enable input        
        } else {
            $('#password').attr('disabled', true); //disable input
       }
      });
  });
</script>

@endsection