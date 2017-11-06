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