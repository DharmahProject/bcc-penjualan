<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-home"></i> <span>Bukit Cimanggu City</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="{{ url('assets/images/img.jpg')}}" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Welcome,</span>
          <h2>{{ $name }}</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}"><i class="fa fa-home active"></i> Dashboard </a></li>
            
          </ul>
        </div>
        <div class="menu_section">
          <h3>Master</h3>
          <ul class="nav side-menu">
            <li class="{{ Request::is('pricelist') ? 'active' : '' }}"><a href="{{ url('pricelist') }}"><i class="fa fa-calculator"></i> Pricelist</a></li>
            <li class="{{ Request::is('teams') ? 'active' : '' }}"><a href="{{ url('teams') }}"><i class="fa fa-file-text"></i> Team</a></li>              
          </ul>
        </div>
        <div class="menu_section">
          <h3>Transaksi</h3>
          <ul class="nav side-menu">
            <li class="{{ Request::is('penjualan') ? 'active' : '' }}"><a href="{{ url('penjualan') }}"><i class="fa fa-calculator"></i> Penjualan</a></li>
            <li class="{{ Request::is('ppjb') ? 'active' : '' }}"><a href="{{ url('ppjb') }}"><i class="fa fa-file-text"></i> PPJB</a></li>              
            <li class="{{ Request::is('komisi') ? 'active' : '' }}"><a href="{{ url('komisi') }}"><i class="fa fa-money"></i> Komisi</a></li>
          </ul>
        </div>
        <div class="menu_section">
          <h3>Laporan</h3>
          <ul class="nav side-menu">
            <li class="{{ Request::is('laporanpenjualan') ? 'active' : '' }}"><a href="{{ url('laporanpenjualan') }}"><i class="fa fa-calculator"></i> Penjualan</a></li>
          </ul>
        </div>
        <div class="menu_section">
          <h3>User Manajemen</h3>
          <ul class="nav side-menu">
            <li class="{{ Request::is('profile') ? 'active' : '' }}"><a href="{{ url('profile') }}"><i class="fa fa-calculator"></i> Profile</a></li>
            <li class="{{ Request::is('user') ? 'active' : '' }}"><a href="{{ url('user') }}"><i class="fa fa-file-text"></i> User</a></li>              
          </ul>
        </div>

      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      {{-- <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div> --}}
      <!-- /menu footer buttons -->
    </div>
  </div>