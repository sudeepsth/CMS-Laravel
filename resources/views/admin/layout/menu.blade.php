<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{ url('/my-admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        @if(Auth::user()->roles[0]->role_name=='admin')
        <li>
          <a href="{{ url('/my-admin/user/list') }}"><i class="fa fa-user"></i> <span>User List</span></a>
        </li>
        @endif
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>News</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('news.index') }}"><i class="fa fa-circle-o"></i> All Posts</a></li>
            <li><a href="{{ route('news.create') }}"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
        @if(Auth::user()->roles[0]->role_name=='admin')
        <li><a href="{{ route('category.index') }}"><i class="fa fa-th"></i> <span>Category</span></a></li>
        <li><a href="{{ route('news.deleted') }}"><i class="fa fa-pie-chart"></i> <span>Deleted Post</span></a></li>
        <li><a href="{{ route('userdetail.index') }}"><i class="fa fa-pie-chart"></i> <span>User Details</span></a></li>
         @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>