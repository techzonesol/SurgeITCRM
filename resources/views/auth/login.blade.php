<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/components.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/colors.min.css') }}" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script src="{{ asset('js/main/jquery.min.js') }}"></script>
  <script src="{{ asset('js/main/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/login.js') }}"></script>
  <!-- /theme JS files -->

</head>

<body class="bg-slate-800">

  <!-- Page content -->
  <div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

      <!-- Content area -->
      <div class="content d-flex justify-content-center align-items-center">

        <!-- Login card -->
        <form class="login-form" method="post" action="{{ route('login') }}">
          @csrf
          <div class="card mb-0">
            <div class="card-body">
              <div class="text-center mb-3">
                
                <img class="center-align" src="http://www.surgeitsupport.com/wp-content/uploads/2018/04/SurgetIT-logo-300.jpg" style="margin: auto; display: block; height: 50%;" />

                <h5 class="mb-0">Login to your account</h5>
                <span class="d-block text-muted">Your credentials</span>
              </div>

              <div class="form-group form-group-feedback form-group-feedback-left">
                <input type="text" class="form-control" id="user_username" name="user_username" placeholder="Username" required autofocus>
                <div class="form-control-feedback">
                  <i class="icon-user text-muted"></i>
                </div>

                @if ($errors->has('user_username'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('user_username') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group form-group-feedback form-group-feedback-left">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <div class="form-control-feedback">
                  <i class="icon-lock2 text-muted"></i>
                </div>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              {{-- Forget Password --}}
              @if (Route::has('password.request'))
                <div class="form-group d-flex align-items-center">
                  <a href="{{ route('password.request') }}" class="ml-auto">{{ __('Forgot Your Password?') }}</a>
                </div>
              @endif

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" type="submit" name="action">Sign in <i class="icon-circle-right2 ml-2"></i></button>
              </div>

              {{-- <div class="form-group text-center text-muted content-divider">
                <span class="px-2">Don't have an account?</span>
              </div>

              <div class="form-group">
                <a href="#" class="btn btn-light btn-block">Sign up</a>
              </div>

              <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span> --}}
            </div>
          </div>
        </form>
        <!-- /login card -->

      </div>
      <!-- /content area -->

    </div>
    <!-- /main content -->

  </div>
  <!-- /page content -->

</body>
</html>
