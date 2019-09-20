@include('templates.head')
<body >
<div class="wrapper" style="background: url('images/back.gif')">

<!-- <div class="row">
  <div style="background-color:blue" class="col-md-6 full-height" >
  </div>
  
  <div class="col-md-6">   -->
        <div class="login-box">
        <div class="login-logo">
          <a style="color: #fff4f4;" ><b>Tools</b> by DevOps</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body" style="background: transparent;">
          <p class="login-box-msg" style="color: #ffff;">Sign in to start your session</p>

          <form method="post" action="{{ route('login') }}">
          {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
              <input id="email" type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus style="background: transparent;">
              <span class="glyphicon glyphicon-envelope form-control-feedback" ></span>
              @if ($errors->has('email'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
              <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
              <input id="password" type="password" name="password" class="form-control" placeholder="Password" required style="background: transparent;">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              @if ($errors->has('password'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
              <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
            </div>
            <div class="row">
              
              <!-- /.col -->
              <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <!-- /.social-auth-links -->

          <!-- <a href="#">I forgot my password</a><br>
          <a href="register.html" class="text-center">Register a new membership</a> -->

        </div>
        <!-- /.login-box-body -->
      </div>
      <!-- /.login-box -->

    <!-- </div>
  </div> -->
</div>
<!-- ./wrapper -->

@include('templates.setting')
</body>
@yield('content')
