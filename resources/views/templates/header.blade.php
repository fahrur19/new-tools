<header class="main-header">
    <!-- Logo -->
    <a  class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="images/logoebdesk2.svg"  width="40"></span>
      <img src="images/logoebdesk2.svg"  width="40"><b>Tools Devops </b>
      <!-- logo for regular state and mobile devices -->
      <!-- <span class="logo-lg"><b>Tools</b></span> -->
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
       
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i><span class="hidden-xs">User</span>
            </a>
            <ul class="dropdown-menu">              
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-12 text-center">
                  <h4>Welcome back, <b>{{ Auth::user()->name }}</b></h4>
                    <!-- <a href="#" >Halo <b>User</b></a> -->
                  </div>
                 </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                <h6>{{ Auth::user()->email }}</h6>
                </div>
                <div class="pull-right">
                  <!-- <a href="#" class="btn btn-default btn-flat">Logout</a> -->
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>