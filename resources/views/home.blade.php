@extends('layouts.app')
@section('content')
    @if(Session::has('msg'))
        <p class="alert alert-success">{{ Session::get('msg') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
    @endif

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
    @endif
    @if(Session::has('error'))
        <p class="alert alert-danger">{{ Session::get('error') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
    @endif


    <section class="gnrl-mrgn-pdng gnrl-blk header">
        <div class="container">
            <div class="row">

                <div class="col s12 m6 l3">

                    <div class="gnrl-mrgn-pdng valign-wrapper card-con">
                        <a href="#" class="gnrl-mrgn-pdng gnrl-blk card-con-prt">
                            <div class="gnrl-mrgn-pdng gnrl-blk card-con-title">
                                <h1 class="gnrl-mrgn-pdng gnrl-blk gnrl-font-bold right-align">
                                    Open Tickets
                                    <span class="gnrl-blk gnrl-mrgn-pdng gnrl-font">
                      30,250
                    </span>
                                </h1>
                                <div class="valign-wrapper  gnrl-mrgn-pdng card-con-tags">
                                    <img src="{{asset('images/tag.png')}}" alt="" />
                                </div>
                            </div><!-- end card title -->
                        </a><!-- end card part container -->
                    </div><!-- end card container -->

                </div><!-- end col -->

                <div class="col s12 m6 l3">

                    <div class="gnrl-mrgn-pdng valign-wrapper card-con">
                        <a href="#" class="gnrl-mrgn-pdng gnrl-blk card-con-prt">
                            <div class="gnrl-mrgn-pdng gnrl-blk card-con-title">
                                <h1 class="gnrl-mrgn-pdng gnrl-blk gnrl-font-bold right-align">
                                    Technicians Online
                                    <span class="gnrl-blk gnrl-mrgn-pdng gnrl-font">
                      30,250
                    </span>
                                </h1>
                                <div class="valign-wrapper  gnrl-mrgn-pdng card-con-tags">
                                    <img src="{{asset('images/cog.png')}}" alt="" />
                                </div>
                            </div><!-- end card title -->
                        </a><!-- end card part container -->
                    </div><!-- end card container -->

                </div><!-- end col -->

                <div class="col s12 m6 l3">

                    <div class="gnrl-mrgn-pdng valign-wrapper card-con">
                        <a href="#" class="gnrl-mrgn-pdng gnrl-blk card-con-prt">
                            <div class="gnrl-mrgn-pdng gnrl-blk card-con-title">
                                <h1 class="gnrl-mrgn-pdng gnrl-blk gnrl-font-bold right-align">
                                    System Alerts
                                    <span class="gnrl-blk gnrl-mrgn-pdng gnrl-font">
                      30,250
                    </span>
                                </h1>
                                <div class="valign-wrapper  gnrl-mrgn-pdng card-con-tags">
                                    <img src="{{asset('images/bell.png')}}" alt="" />
                                </div>
                            </div><!-- end card title -->
                        </a><!-- end card part container -->
                    </div><!-- end card container -->

                </div><!-- end col -->

                <div class="col s12 m6 l3">

                    <div class="gnrl-mrgn-pdng valign-wrapper card-con">
                        <a href="#" class="gnrl-mrgn-pdng gnrl-blk card-con-prt">
                            <div class="gnrl-mrgn-pdng gnrl-blk card-con-title">
                                <h1 class="gnrl-mrgn-pdng gnrl-blk gnrl-font-bold right-align">
                                    Clients
                                    <span class="gnrl-blk gnrl-mrgn-pdng gnrl-font">
                      30,250
                    </span>
                                </h1>
                                <div class="valign-wrapper  gnrl-mrgn-pdng card-con-tags">
                                    <img src="{{asset('images/clients.png')}}" alt="" />
                                </div>
                            </div><!-- end card title -->
                        </a><!-- end card part container -->
                    </div><!-- end card container -->

                </div><!-- end col -->



            </div>
        </div>
    </section><!-- header section end -->

    <section class="gnrl-blk gnrl-mrgn-pdng card-playing">
        <div class="container">
            <div class="row">


                <div class="col s12 m12 l4">
                    <div class="gnrl-blk gnrl-mrgn-pdng card-play-con">
                        <div class="gnrl-blk gnrl-mrgn-pdng card-play-prt">
                            <div class="gnrl-blk gnrl-mrgn-pdng card-play-header"><!-- header start -->
                                <h1 class="gnrl-mrgn-pdng gnrl-blk gnrl-font-bold card-play-title">
                                    Tickets Statistics
                                </h1>
                                <ul class="gnrl-mrgn-pdng valign-wrapper card-header-option">
                                    <li>
                                        <a href="" class="gnrl-font">
                                            <i class="fa fa-sync"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="gnrl-font">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- header end -->
                            <div class="gnrl-blk gnrl-mrgn-pdng card-play-content" style="padding: 40px 18px 33px;"><!-- content start -->
                                <div id="resizable" style="height: 307px;">
                                    <div id="chartContainer1" style="height: 100%; width: 100%;"></div>
                                </div>
                            </div><!-- content end -->
                        </div>
                    </div>
                </div><!-- col end -->




                <div class="col s12 m12 l3">
                    <div class="gnrl-blk gnrl-mrgn-pdng card-play-con">
                        <div class="gnrl-blk gnrl-mrgn-pdng card-play-prt">

                            <div class="gnrl-blk gnrl-mrgn-pdng card-play-header"><!-- header start -->
                                <h1 class="gnrl-mrgn-pdng gnrl-blk gnrl-font-bold card-play-title">
                                    Assets Board
                                </h1>
                                <ul class="gnrl-mrgn-pdng valign-wrapper card-header-option">
                                    <li>
                                        <a href="" class="gnrl-font">
                                            <i class="fa fa-sync"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="gnrl-font">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- header end -->

                            <div class="gnrl-blk gnrl-mrgn-pdng card-play-content"><!-- content start -->
                                <ul class="collection asset-board">
                                    <li class="collection-item avatar valign-wrapper">
                                        <i class="material-icons circle large">insert_chart</i>
                                        <span class="title gnrl-font-bold"> Active Tickets </span>
                                        <a href="#!" class="secondary-content gnrl-font-bold"><i class="">12</i></a>
                                    </li>
                                    <li class="collection-item avatar valign-wrapper">
                                        <i class="material-icons circle center-align large">list</i>
                                        <span class="title gnrl-font-bold">Pending Tickets</span>
                                        <a href="#!" class="secondary-content gnrl-font-bold"><i class="">23</i></a>
                                    </li>
                                    <li class="collection-item avatar valign-wrapper">
                                        <i class="material-icons circle large">timelapse</i>
                                        <span class="title gnrl-font-bold">Inprogress Tickets</span>
                                        <a href="#!" class="secondary-content gnrl-font-bold"><i class="">42</i></a>
                                    </li>
                                    <li class="collection-item avatar valign-wrapper">
                                        <i class="material-icons circle large">insert_chart</i>
                                        <span class="title gnrl-font-bold">Close Tickets</span>
                                        <a href="#!" class="secondary-content gnrl-font-bold"><i class="">15</i></a>
                                    </li>
                                </ul>
                            </div><!-- content end -->
                        </div>
                    </div>
                </div><!-- col end -->




                <div class="col s12 m12 l5">
                    <div class="gnrl-blk gnrl-mrgn-pdng card-play-con">
                        <div class="gnrl-blk gnrl-mrgn-pdng card-play-prt">
                            <div class="gnrl-blk gnrl-mrgn-pdng card-play-header"><!-- header start -->
                                <h1 class="gnrl-mrgn-pdng gnrl-blk gnrl-font-bold card-play-title">
                                    Manage Tickets
                                </h1>
                                <ul class="gnrl-mrgn-pdng valign-wrapper card-header-option">
                                    <li>
                                        <a href="" class="gnrl-font">
                                            <i class="fa fa-sync"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="gnrl-font">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- header end -->
                            <div class="gnrl-blk gnrl-mrgn-pdng card-play-content"><!-- content start -->

                                <ul class="collection manage-tickets" style="margin-top: 57px;">

                                    <li class="collection-item avatar">
                                        <img src="{{asset('images/yuna.jpg')}}" alt="" class="circle">
                                        <span class="title gnrl-font"> <b class=" gnrl-font-bold"> james: </b> [#23047] Donec return congeo leo eget malesusada </span>
                                        <p class=" gnrl-font"> Donec return congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim vivamus.
                                        </p>

                                        <p class="date">
                                            <span class=" gnrl-font">Last responded: 3 hours ago </span>
                                            <span class=" gnrl-font"> Due in: 2 Days </span>
                                        </p>
                                        <div class="clearfix"></div>
                                        <a href="#!" class="secondary-content dropdown-trigger" href='#' data-target='dropdown1'>Manage</a>
                                        <!-- Dropdown Structure -->
                                        <ul id='dropdown1' class='dropdown-content'>
                                            <li><a href="#!" class=" gnrl-font">One option</a></li>
                                            <li><a href="#!" class=" gnrl-font">Two option</a></li>
                                            <li><a href="#!" class=" gnrl-font">three</a></li>
                                            <li><a href="#!" class=" gnrl-font"><i class="material-icons">view_module</i>four</a></li>
                                            <li><a href="#!" class=" gnrl-font"><i class="material-icons">cloud</i>five</a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </li>

                                    <li class="collection-item avatar">
                                        <img src="{{asset('images/yuna.jpg')}}" alt="" class="circle">
                                        <span class="title gnrl-font"> <b class=" gnrl-font-bold"> james: </b> [#23047] Donec return congeo leo eget malesusada </span>
                                        <p class=" gnrl-font"> Donec return congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim vivamus.
                                        </p>

                                        <p class="date">
                                            <span class=" gnrl-font">Last responded: 3 hours ago </span>
                                            <span class=" gnrl-font"> Due in: 2 Days </span>
                                        </p>
                                        <div class="clearfix"></div>
                                        <a href="#!" class="secondary-content dropdown-trigger" href='#' data-target='dropdown2'>Manage</a>
                                        <!-- Dropdown Structure -->
                                        <ul id='dropdown2' class='dropdown-content'>
                                            <li><a href="#!" class=" gnrl-font">One option</a></li>
                                            <li><a href="#!" class=" gnrl-font">Two option</a></li>
                                            <li><a href="#!" class=" gnrl-font">three</a></li>
                                            <li><a href="#!" class=" gnrl-font"><i class="material-icons">view_module</i>four</a></li>
                                            <li><a href="#!" class=" gnrl-font"><i class="material-icons">cloud</i>five</a></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </li>


                                </ul>
                            </div><!-- content end -->
                        </div>
                    </div>
                </div><!-- col end -->



            </div>
        </div>
    </section><!-- card playing end -->

    <section class="gnrl-blk gnrl-mrgn-pdng card-playing">
        <div class="container">


            <div class="row">


                <div class="col s12 m12 l9">
                    <div class="gnrl-blk gnrl-mrgn-pdng card-play-con">

                        <div class="gnrl-blk gnrl-mrgn-pdng card-play-prt">

                            <div class="gnrl-blk gnrl-mrgn-pdng card-play-header" style="padding-bottom: 0;"><!-- header start -->

                                <ul class="tabs">
                                    <li class="tab">
                                        <a href="#meraki" class="gnrl-font-bold valign-wrapper">
                                            <img src="{{asset('images/Cisco.png')}}" class="tab-img" alt="" />Meraki
                                        </a>
                                    </li>
                                    <li class="tab">
                                        <a href="#vpn" class="gnrl-font-bold valign-wrapper">
                                            <img src="{{asset('images/security.png')}}" class="tab-img" alt="" />VPN
                                        </a>
                                    </li>
                                    <li class="tab">
                                        <a class="active valign-wrapper gnrl-font-bold" href="#assets">
                                            <img src="{{asset('images/dollar.png')}}" class="tab-img" alt="" />Assets
                                        </a>
                                    </li>
                                    <li class="tab">
                                        <a class="gnrl-font-bold valign-wrapper">
                                            <img src="{{asset('images/action.png')}}" class="tab-img" alt="" />Action
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- header end -->

                            <div class="gnrl-blk gnrl-mrgn-pdng card-play-content"><!-- content start -->


                                <div class="col s12 m6 l6 right valign-wrapper bottom-search-con" style="padding-right: 0;"><!-- bottom search start -->
                                    <div class="input-field gnrl-mrgn-pdng">
                                        <input type="text" id="search-bottom" name="search" class="" />
                                        <label for="search-bottom">Search</label>
                                    </div>
                                    <button type="submit" class="sub-search"> <i class="fa fa-search"></i></button>
                                    <button type="submit" class="sub-search-reload"> <i class="fa fa-sync"></i></button>
                                </div><!-- bottom search end -->

                                <div class="clearfix"></div>

                                <div id="meraki">
                                    <table class="striped responsive-table" style="padding: 15px;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;-webkit-box-shadow: 0px 0px 5px rgba(0,0,0,.7);-moz-box-shadow:  0px 0px 5px rgba(0,0,0,.7);box-shadow:  0px 0px 5px rgba(0,0,0,.7);">
                                        <thead>
                                        <tr>
                                            <th>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" id="checkAll" class="filled-in" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </th>
                                            <th> No </th>
                                            <th> Subject </th>
                                            <th> Priority </th>
                                            <th> Status </th>
                                            <th> Date Modified </th>
                                            <th> Contacts </th>
                                            <th> Date Created </th>
                                            <th> Created by </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>01</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>02</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>03</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>04</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>05</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content:center">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>06</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>

                                <div id="vpn">
                                    <table class="striped responsive-table" style="padding: 15px;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;-webkit-box-shadow: 0px 0px 5px rgba(0,0,0,.7);-moz-box-shadow:  0px 0px 5px rgba(0,0,0,.7);box-shadow:  0px 0px 5px rgba(0,0,0,.7);">
                                        <thead>
                                        <tr>
                                            <th>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" id="checkAll1" class="filled-in" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </th>
                                            <th> No1 </th>
                                            <th> Subject </th>
                                            <th> Priority </th>
                                            <th> Status </th>
                                            <th> Date Modified </th>
                                            <th> Contacts </th>
                                            <th> Date Created </th>
                                            <th> Created by </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>01</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>02</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>03</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>04</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>05</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content:center">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>06</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>

                                <div id="assets">
                                    <table class="striped responsive-table" style="padding: 15px;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;-webkit-box-shadow: 0px 0px 5px rgba(0,0,0,.7);-moz-box-shadow:  0px 0px 5px rgba(0,0,0,.7);box-shadow:  0px 0px 5px rgba(0,0,0,.7);">
                                        <thead>
                                        <tr>
                                            <th>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" id="checkAll2" class="filled-in" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </th>
                                            <th> No2 </th>
                                            <th> Subject </th>
                                            <th> Priority </th>
                                            <th> Status </th>
                                            <th> Date Modified </th>
                                            <th> Contacts </th>
                                            <th> Date Created </th>
                                            <th> Created by </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>01</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>02</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>03</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>04</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content: center;">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>05</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="valign-wrapper gnrl-mrgn-pdng" style="justify-content:center">
                                                    <label>
                                                        <input type="checkbox" class="filled-in checkbox" name="check[]" />
                                                        <span></span>
                                                    </label>
                                                </p>
                                            </td>
                                            <td>06</td>
                                            <td>Assets</td>
                                            <td>High</td>
                                            <td>In progress</td>
                                            <td>10/12/2018</td>
                                            <td>Mary Byler</td>
                                            <td>10/12/2018</td>
                                            <td>Shakeel</td>
                                            <td><a href="" class="action"><i class="fa fa-edit"></i></a><a href="" class="action"><i class="fa fa-eye"></i></a></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>

                                <a href="" class="gnrl-blk gnrl-mrgn-pdng gnrl-font load-more"> <i class="fa fa-edit"></i> Show All </a>

                            </div><!-- content end -->
                        </div>
                    </div>
                </div><!-- col end -->





                <div class="col s12 m12 l3">
                    <div class="gnrl-blk gnrl-mrgn-pdng card-play-con">
                        <div class="gnrl-blk gnrl-mrgn-pdng card-play-prt">

                            <div class="gnrl-blk gnrl-mrgn-pdng card-play-header"><!-- header start -->
                                <h1 class="gnrl-mrgn-pdng gnrl-blk card-play-title">
                                    Latest Tickests Order
                                </h1>
                            </div><!-- header end -->

                            <div class="gnrl-blk gnrl-mrgn-pdng card-play-content"><!-- content start -->

                                <ul class="collection manage-tickets latest-tickets">

                                    <li class="collection-item avatar">
                                        <span class="title gnrl-font-bold"> Ned Stards </span>
                                        <a href="#!" class="secondary-content latest-secondary-content">$ 400</a>
                                        <a href="#!" class="secondary-content latest-secondary-content-two valign-wrapper"> <i class="fa fa-angle-right"></i> </a>

                                        <p class="date">
                                            <span> <i class="fa fa-calendar"></i> 10 minutes ago </span>
                                        </p>

                                    </li>

                                    <li class="collection-item avatar">
                                        <span class="title gnrl-font-bold"> Steve Lewis </span>
                                        <a href="#!" class="secondary-content latest-secondary-content">$ 620</a>
                                        <a href="#!" class="secondary-content latest-secondary-content-two valign-wrapper"> <i class="fa fa-angle-right"></i> </a>

                                        <p class="date">
                                            <span> <i class="fa fa-calendar"></i> 2 hours ago </span>
                                        </p>

                                    </li>

                                    <li class="collection-item avatar">
                                        <span class="title gnrl-font-bold"> John Ford </span>
                                        <a href="#!" class="secondary-content latest-secondary-content">$ 220</a>
                                        <a href="#!" class="secondary-content latest-secondary-content-two valign-wrapper"> <i class="fa fa-angle-right"></i> </a>

                                        <p class="date">
                                            <span> <i class="fa fa-calendar"></i> Today 8th july </span>
                                        </p>

                                    </li>

                                    <li class="collection-item avatar">
                                        <span class="title gnrl-font-bold"> Kim Basinger </span>
                                        <a href="#!" class="secondary-content latest-secondary-content">$ 400</a>
                                        <a href="#!" class="secondary-content latest-secondary-content-two valign-wrapper"> <i class="fa fa-angle-right"></i> </a>

                                        <p class="date">
                                            <span> <i class="fa fa-calendar"></i> Yesterday 7th july </span>
                                        </p>

                                    </li>

                                    <li class="collection-item avatar">
                                        <span class="title gnrl-font-bold"> Steve Lewis </span>
                                        <a href="#!" class="secondary-content latest-secondary-content">$ 400</a>
                                        <a href="#!" class="secondary-content latest-secondary-content-two valign-wrapper"> <i class="fa fa-angle-right"></i> </a>

                                        <p class="date">
                                            <span> <i class="fa fa-calendar"></i> 8th july </span>
                                        </p>

                                    </li>


                                </ul>

                                <a href="" class="gnrl-blk gnrl-mrgn-pdng gnrl-font load-more"> <i class="fa fa-edit"></i> Show All </a>
                            </div><!-- content end -->

                        </div>
                    </div>
                </div><!-- col end -->




            </div>
        </div>
    </section><!-- card playing end -->

    <footer>
        <div class="copy-content">
            <div class="container">
                <a href="http://adviceadvertising.ae/" target="_blank">
                    <p>
                        &copy; Copyright 2018. All Rights Reserved.

                    </p>
                </a>
            </div>
        </div>
    </footer>
@endsection