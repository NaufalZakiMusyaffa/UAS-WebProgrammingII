<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">BERANDA</li>
        <li class="menu-sidebar {{ (Request::path() == 'admin') ? 'active' : '' }}"><a href="{{ url('/') }}"><i class="fa fa-fw fa-home"></i> Home</span></a></li>
        
        <li class="header">MASTER DATA</li>
 
        <li class="treeview {{ (Request::segment(1) == 'master') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-fw fa-bullhorn"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::path() == 'master/kategori') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/kategori') }}"><i class="fa fa-fw fa-newspaper-o"></i> Kategori</a></li>
 
            <li class="{{ (Request::path() == 'master/buku') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/buku') }}"><i class="fa fa-fw fa-newspaper-o"></i> Data Buku</a></li>

            <li class="{{ (Request::path() == 'master/user') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/user') }}"><i class="fa fa-fw fa-newspaper-o"></i> Data User</a></li>
 
          </ul>
        </li>
 
        <li class="header">OTHER</li>
        <li class="{{ (Request::path() == 'master/info') ? 'active' : '' }} menu-sidebar"><a href="{{ url('master/info') }}"><i class="fa fa-fw fa-newspaper-o"></i> Tentang</a></li>
        <li class="menu-sidebar"><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>
 
 
      </ul>
    </section>