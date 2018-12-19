<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="{{asset('css/Custom/gnrl.css')}}" />
  <link type="text/css" rel="stylesheet" href="{{asset('css/Custom/style.css')}}" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=0"/>
  <link href="css/jquery-ui.1.11.2.min.css" rel="stylesheet" />
  <script>
    window.onload = function () {

// Construct options first and then pass it as a parameter
      var options1 = {
        animationEnabled: true,
        title: {
          text: ""
        },
        axisY: {
          gridThickness: 0
        },
        data: [{
          type: "column", //change it to line, area, bar, pie, etc
          legendText: "",
          showInLegend: false,
          color: "#8234b8",
          dataPoints: [
            { label: "Monday", y: 10 },
            { label: "Tuesday", y: 6 },
            { label: "Wednesday", y: 14 },
            { label: "Thursday", y: 12 },
            { label: "Friday", y: 19 },
            { label: "Saturday", y: 14 },
            { label: "Sunday", y: 22 }
          ]
        }]
      };

      $("#resizable").resizable({
        create: function (event, ui) {
          //Create chart.
          $("#chartContainer1").CanvasJSChart(options1);
        },
        resize: function (event, ui) {
          //Update chart size according to its container size.
          $("#chartContainer1").CanvasJSChart().render();
        }
      });

    }
  </script>
</head>

<body>

<header class="gnrl-blk gnrl-mrgn-pdng">
  <div class="container">

    <nav>
      <div class="nav-wrapper">
        <a href="/home" class="brand-logo"> <img src="images/logo.png" alt="" /> </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        @guest
        <ul class="navbar-nav ml-auto right">
            <!-- Authentication Links -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <!-- <li class="nav-item">
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </li> -->
        </ul>

        @else

        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="/contacts"> <i class="fa fa-plus"></i> Contacts </a></li>
          <li><a href="/company"> <i class="fa fa-plus"></i> Companies </a></li>
          <li><a href="/employees"> <i class="fa fa-plus"></i> Employees </a></li>
            @if (Route::has('register'))
                <li><a href="{{ route('register') }}"><i class="fa fa-plus"></i> {{ __('Add New User') }}</a></li>
            @endif
          <li>
          <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> 
                {{ __('Logout') }} 
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </li>
        </ul>

        <ul id="" class="valign-wrapper right hide-on-med-and-down">
          <li>
            <div class="input-field top-search">
              <input id="search_top" type="text" placeholder="Search" required>
              <button type="submit" class="btn-srch"><i class="material-icons">search</i></button>

            </div>
          </li>
          <li>
            <a href="#" class="valign-wrapper nav-icon">
              <i class="fa fa-plus"></i>
            </a>
          </li>
          <li>
            <a href="#" class="valign-wrapper nav-icon">
              <i class="material-icons">email</i>
              <span>0</span>
            </a>
          </li>
          <li>
            <a href="#" class="valign-wrapper nav-icon">
              <i class="bell"></i>
              <span>0</span>
            </a>
          </li>
          <li>
            <a href="#" class="valign-wrapper nav-icon user-img">
              <i class="material-icons">account_circle</i>
              <span></span>
            </a>
          </li>

        </ul>
        @endguest


      </div>
    </nav><!-- nav end -->


    <ul class="sidenav" id="mobile-demo">
      <li><a href="#"> Marketing </a></li>
      <li><a href="#"> Help Desk </a></li>
      <li><a href="#"> Administration </a></li>
      <li><a href="#"> Accounting </a></li>
      <li><a href="#"> Sales </a></li>
      <li><a href="#"> Knowledge Base </a></li>
    </ul>

  </div>

</header><!-- header end -->


<section class="gnrl-blk gnrl-mrgn-pdng card-playing">
    @yield('content')
</section><!-- card playing end -->








<footer>
  <div class="copy-content">
    <div class="container">
        <p>
          &copy; Copyright 2018 - SurgeIT Support. All Rights Reserved.
        </p>
    </div>
  </div>
</footer>




<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery-ui.1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('.dropdown-trigger').dropdown();
      $('.tabs').tabs();
      $('.sidenav').sidenav();

      //select all checkboxes
      $("#checkAll").change(function(){  //"select all" change
        $(".checkbox").prop('checked', $(this).prop("checked")); //change all ".checkbox" checked status
      });

      //".checkbox" change
      $('.checkbox').change(function(){
        //uncheck "select all", if one of the listed checkbox item is unchecked
        if(false == $(this).prop("checked")){ //if this item is unchecked
          $("#checkAll").prop('checked', false); //change "select all" checked status to false
        }
        //check "select all" if all checkbox items are checked
        if ($('.checkbox:checked').length == $('.checkbox').length ){
          $("#checkAll").prop('checked', true);
        }
      });

    });
</script>

<script src="{{asset('js/jquery.canvasjs.min.js')}}"></script>

</body>
</html>