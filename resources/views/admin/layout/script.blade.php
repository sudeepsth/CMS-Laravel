<!-- jQuery 2.2.3 -->
{{-- <script src="{{ asset('admin/plugins/jQuery/jquery-2.2.3.min.js') }}"></script> --}}
<!-- Bootstrap 3.3.6 -->

<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>

<!-- jQuery UI 1.11.4 -->
{{-- <script src="{{ asset('admin/assets/jquery-ui/jquery-ui.min.js')}}"></script> --}}
<!-- SlimScroll -->
<script src="{{ asset('admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/plugins/fastclick/fastclick.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>



<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>


<script>
	@if(Session::has('done'))
		toastr.success("{{Session::get('done')}}")
	@endif
	@if(Session::has('warning'))
		toastr.warning("{{Session::get('warning')}}")
	@endif
</script>
<script>
CKEDITOR.replace('my-editor', options);
</script>