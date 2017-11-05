<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('libs/assets/animate.css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('libs/assets/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('libs/assets/simple-line-icons/css/simple-line-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('libs/jquery/bootstrap/dist/css/bootstrap.css') }}" type="text/css" />
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="app app-header-fixed ">
  

    <!-- header -->
  <header id="header" class="app-header navbar" role="menu">
      <!-- navbar header -->
      <div class="navbar-header bg-dark">
        <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
          <i class="fa fa-btc"></i>
          <img src="img/logo.png" alt="." class="hide">
          <span class="hidden-folded m-l-xs">Macksab</span>
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
          <a href="#" class="btn no-shadow navbar-btn" ui-toggle-class="app-aside-folded" target=".app">
            <i class="fa fa-dedent fa-fw text"></i>
            <i class="fa fa-indent fa-fw text-active"></i>
          </a>
          <a href="#" class="btn no-shadow navbar-btn" ui-toggle-class="show" target="#aside-user">
            <i class="icon-user fa-fw"></i>
          </a>
        </div>
        <!-- / buttons -->

        <!-- search form -->
        <form class="navbar-form navbar-form-sm navbar-left shift" ui-shift="prependTo" data-target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
          <div class="form-group">
            <div class="input-group">
              <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control input-sm bg-light no-border rounded padder" placeholder="Search projects...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </div>
        </form>
        <!-- / search form -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="icon-bell fa-fw"></i>
              <span class="visible-xs-inline">Notifications</span>
              <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
            </a>
            <!-- dropdown -->
            <div class="dropdown-menu w-xl animated fadeInUp">
              <div class="panel bg-white">
                <div class="panel-heading b-light bg-light">
                  <strong>You have <span>2</span> notifications</strong>
                </div>
                <div class="list-group">
                  <a href class="list-group-item">
                    <span class="pull-left m-r thumb-sm">
                      <img src="img/a0.jpg" alt="..." class="img-circle">
                    </span>
                    <span class="clear block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                  </a>
                  <a href class="list-group-item">
                    <span class="clear block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                </div>
              </div>
            </div>
            <!-- / dropdown -->
          </li>
          @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
          @else
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="img/a0.jpg" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
              <span class="hidden-sm hidden-md">{{ Auth::user()->name }}</span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
          @endif
        </ul>
        <!-- / navbar right -->
      </div>
      <!-- / navbar collapse -->
  </header>
  <!-- / header -->

    @if (!Auth::guest())
    <!-- aside -->
    <aside id="aside" class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- user -->
          <div class="clearfix hidden-xs text-center hide" id="aside-user">
            <div class="dropdown wrapper">
              <a href="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="img/a0.jpg" class="img-full" alt="...">
                </span>
              </a>
              @if (!Auth::guest())
              <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">{{ Auth::user()->name }}</strong> 
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
              </a>
              @endif
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                  <span class="arrow top hidden-folded arrow-info"></span>
                  <div>
                    <p>300mb of 500mb used</p>
                  </div>
                  <div class="progress progress-xs m-b-none dker">
                    <div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                  </div>
                </li>
                <li>
                  <a href>Settings</a>
                </li>
                <li>
                  <a href="page_profile.html">Profile</a>
                </li>
                <li>
                  <a href>
                    <span class="badge bg-danger pull-right">3</span>
                    Notifications
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="page_signin.html">Logout</a>
                </li>
              </ul>
              <!-- / dropdown -->
            </div>
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->

          <!-- nav -->
          <nav ui-nav class="navi clearfix">
            <ul class="nav">
              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span>Navigation</span>
              </li>
              <li>
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                  <span class="font-bold">Dashboard</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li>
                    <a href="index.html">
                      <span>Dashboard v1</span>
                    </a>
                  </li>
                  <li>
                    <a href="dashboard.html">
                      <b class="label bg-info pull-right">N</b>
                      <span>Dashboard v2</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="mail.html">
                  <b class="badge bg-info pull-right">9</b>
                  <i class="glyphicon glyphicon-envelope icon text-info-lter"></i>
                  <span class="font-bold">Email</span>
                </a>
              </li>
              <li class="line dk"></li>
              <li>
                <a href="ui_chart.html">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>Chart</span>
                </a>
              </li>
              <li>
                <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-file icon"></i>
                  <span>Pages</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Pages</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_profile.html">
                      <span>Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_post.html">
                      <span>Post</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_search.html">
                      <span>Search</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_invoice.html">
                      <span>Invoice</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_price.html">
                      <span>Price</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_lockme.html">
                      <span>Lock screen</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_signin.html">
                      <span>Signin</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_signup.html">
                      <span>Signup</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_forgotpwd.html">
                      <span>Forgot password</span>
                    </a>
                  </li>
                  <li>
                    <a href="page_404.html">
                      <span>404</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="line dk hidden-folded"></li>

              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">          
                <span>Your Stuff</span>
              </li>  
              <li>
                <a href="page_profile.html">
                  <i class="icon-user icon text-success-lter"></i>
                  <b class="badge bg-success pull-right">30%</b>
                  <span>Profile</span>
                </a>
              </li>
              <li>
                <a href>
                  <i class="icon-question icon"></i>
                  <span>Documents</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- nav -->

          <!-- aside footer -->
          <div class="wrapper m-t">
            <div class="text-center-folded">
              <span class="pull-right pull-none-folded">60%</span>
              <span class="hidden-folded">Milestone</span>
            </div>
            <div class="progress progress-xxs m-t-sm dk">
              <div class="progress-bar progress-bar-info" style="width: 60%;">
              </div>
            </div>
            <div class="text-center-folded">
              <span class="pull-right pull-none-folded">35%</span>
              <span class="hidden-folded">Release</span>
            </div>
            <div class="progress progress-xxs m-t-sm dk">
              <div class="progress-bar progress-bar-primary" style="width: 35%;">
              </div>
            </div>
          </div>
          <!-- / aside footer -->
        </div>
      </div>
    </aside>
    <!-- / aside -->
    @endif


  <!-- content -->
    <div id="content" class="app-content" role="main">
        <div class="app-content-body ">

            <div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
                app.settings.asideFolded = false; 
                app.settings.asideDock = false;">
              <!-- main -->
              <div class="col">
                @if (!Auth::guest())
                <!-- main header -->
                <div class="bg-light lter b-b wrapper-md">
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <h1 class="m-n font-thin h3 text-black">Dashboard</h1>
                      <small class="text-muted">Welcome to Macksab Middleware</small>
                    </div>
                    <div class="col-sm-6 text-right hidden-xs">
                      <div class="inline m-r text-left">
                        <div class="m-b-xs">1290 <span class="text-muted">items</span></div>
                        <div ng-init="d3_1=[ 106,108,110,105,110,109,105,104,107,109,105,100,105,102,101,99,98 ]" 
                          ui-jq="sparkline" 
                          ui-options="[ 106,108,110,105,110,109,105,104,107,109,105,100,105,102,101,99,98 ], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}" 
                          class="sparkline inline">loading...
                        </div>
                      </div>
                      <div class="inline text-left">
                        <div class="m-b-xs">$30,000 <span class="text-muted">revenue</span></div>
                        <div ng-init="d3_2=[ 105,102,106,107,105,104,101,99,98,109,105,100,108,110,105,110,109 ]" 
                          ui-jq="sparkline" 
                          ui-options="[ 105,102,106,107,105,104,101,99,98,109,105,100,108,110,105,110,109 ], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}" 
                          class="sparkline inline">loading...
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / main header -->
                <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
                  <!-- stats -->
                  <div class="row">
                    <div class="col-md-5">
                      <div class="row row-sm text-center">
                        <div class="col-xs-6">
                          <div class="panel padder-v item">
                            <div class="h1 text-info font-thin h1">521</div>
                            <span class="text-muted text-xs">New items</span>
                            <div class="top text-right w-full">
                              <i class="fa fa-caret-down text-warning m-r-sm"></i>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <a href class="block panel padder-v bg-primary item">
                            <span class="text-white font-thin h1 block">930</span>
                            <span class="text-muted text-xs">Uploads</span>
                            <span class="bottom text-right w-full">
                              <i class="fa fa-cloud-upload text-muted m-r-sm"></i>
                            </span>
                          </a>
                        </div>
                        <div class="col-xs-6">
                          <a href class="block panel padder-v bg-info item">
                            <span class="text-white font-thin h1 block">432</span>
                            <span class="text-muted text-xs">Comments</span>
                            <span class="top">
                              <i class="fa fa-caret-up text-warning m-l-sm m-r-sm"></i>
                            </span>
                          </a>
                        </div>
                        <div class="col-xs-6">
                          <div class="panel padder-v item">
                            <div class="font-thin h1">129</div>
                            <span class="text-muted text-xs">Feeds</span>
                            <div class="bottom">
                              <i class="fa fa-caret-up text-warning m-l-sm m-r-sm"></i>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 m-b-md">
                          <div class="r bg-light dker item hbox no-border">
                            <div class="col w-xs v-middle hidden-md">
                              <div ng-init="d3_3=[60,40]" ui-jq="sparkline" ui-options="[60,40], {type:'pie', height:40, sliceColors:['#fad733','#fff']}" class="sparkline inline"></div>
                            </div>
                            <div class="col dk padder-v r-r">
                              <div class="text-primary-dk font-thin h1"><span>$12,670</span></div>
                              <span class="text-muted text-xs">Revenue, 60% of the goal</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="panel wrapper">
                        <label class="i-switch bg-warning pull-right" ng-init="showSpline=true">
                          <input type="checkbox" ng-model="showSpline">
                          <i></i>
                        </label>
                        <h4 class="font-thin m-t-none m-b text-muted">Latest Campaign</h4>
                        <div ui-jq="plot" ui-refresh="showSpline" ui-options="
                          [
                            { data: [ [0,7],[1,6.5],[2,12.5],[3,7],[4,9],[5,6],[6,11],[7,6.5],[8,8],[9,7] ], label:'TV', points: { show: true, radius: 1}, splines: { show: true, tension: 0.4, lineWidth: 1, fill: 0.8 } },
                            { data: [ [0,4],[1,4.5],[2,7],[3,4.5],[4,3],[5,3.5],[6,6],[7,3],[8,4],[9,3] ], label:'Mag', points: { show: true, radius: 1}, splines: { show: true, tension: 0.4, lineWidth: 1, fill: 0.8 } }
                          ], 
                          {
                            colors: ['#23b7e5', '#7266ba'],
                            series: { shadowSize: 3 },
                            xaxis:{ font: { color: '#a1a7ac' } },
                            yaxis:{ font: { color: '#a1a7ac' }, max:20 },
                            grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
                            tooltip: true,
                            tooltipOpts: { content: 'Visits of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
                          }
                        " style="height:246px" >
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- / stats -->

                  <!-- tasks -->
                  <div class="panel wrapper">
                    <div class="row">
                        <div class="col-md-12 b-r b-light no-border-xs">
                            <a href class="text-muted pull-right text-lg"><i class="icon-arrow-right"></i></a>
                            <h4 class="font-thin m-t-none m-b-md text-muted">My Tasks</h4>
                            @yield('dashboardcontent')
                        </div>
                        <div class="col-md-12">
                            
                        </div>
                    </div>
                  </div>
                  <!-- / tasks -->
                </div>

                @else

                    @yield('content')

                @endif
                
              </div>
              <!-- / main -->
              @if (!Auth::guest())
              <!-- right col -->
              <div class="col w-md bg-white-only b-l bg-auto no-border-xs">
                
              </div>
              <!-- / right col -->
              @endif
            </div>



        </div>
    </div>
  <!-- /content -->
  
  <!-- footer -->
  <footer id="footer" class="app-footer" role="footer">
    <div class="wrapper b-t bg-light">
      <span class="pull-right">2.2.0 <a href ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
      &copy; 2017 Copyright.
    </div>
  </footer>
  <!-- / footer -->



</div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('libs/jquery/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('libs/jquery/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/ui-load.js') }}"></script>
    <script src="{{ asset('js/ui-jp.config.js') }}"></script>
    <script src="{{ asset('js/ui-jp.js') }}"></script>
    <script src="{{ asset('js/ui-nav.js') }}"></script>
    <script src="{{ asset('js/ui-toggle.js') }}"></script>
    <script src="{{ asset('js/ui-client.js') }}"></script>
</body>
</html>
