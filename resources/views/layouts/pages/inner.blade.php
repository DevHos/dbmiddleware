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
      @include('layouts.menus.topmenu')
  </header>
  <!-- / header -->

    @if (!Auth::guest())
    <!-- aside -->
    <aside id="aside" class="app-aside hidden-xs bg-dark">
      @include('layouts.menus.sidemenu')
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
               
                    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
					  <!-- tasks -->
					  <div class="panel wrapper">
					    <div class="row">
					        <div class="col-md-12 b-r b-light no-border-xs">
					            <a href class="text-muted pull-right text-lg"><i class="icon-arrow-right"></i></a>
					            <h4 class="font-thin m-t-none m-b-md text-muted">Inner Page</h4>
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
  
  @include('layouts.footer')



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
