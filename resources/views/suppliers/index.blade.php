@extends ('layouts.pages.inner')

@section ('dashboardcontent')

	<div class="panel panel-default">
	    <div class="panel-heading">
	      All Suppliers
	    </div>
	    <div class="row wrapper">
	      <div class="col-sm-5 m-b-xs">
	        <select class="input-sm form-control w-sm inline v-middle">
	          <option value="0">Bulk action</option>
	          <option value="1">Delete selected</option>
	        </select>
	        <button type="submit" class="btn btn-sm btn-default">Apply</button>                
	      </div>
	      <div class="col-sm-4">
	      </div>
	      <div class="col-sm-3">
	        <div class="input-group">
	          <input type="text" class="input-sm form-control" placeholder="Search">
	          <span class="input-group-btn">
	            <button class="btn btn-sm btn-default" type="button">Go!</button>
	          </span>
	        </div>
	      </div>
	    </div>
	    <div class="table-responsive">
	      <table class="table table-striped b-t b-light">
	        <thead>
	          <tr>
	            <th style="width:20px;">
	              <label class="i-checks m-b-none">
	                <input type="checkbox"><i></i>
	              </label>
	            </th>
	            <th>Supplier</th>
	            <th>Description</th>
	            <th>Date</th>
	            <th style="width:30px;">Active?</th>
	          </tr>
	        </thead>
	        <tbody>
			@foreach ($supliers as $suplier)
	          <tr>
	            <td><label class="i-checks m-b-none"><input type="checkbox" name="name[]" value="{{$suplier->id}}"><i></i></label></td>
	            <td><a href="/supliers/show/{{$suplier->id}}">{{$suplier->name}}</a></td>
	            <td>{{str_limit($suplier->description, 25)}}</td>
	            <td>{{$suplier->created_at->toFormattedDateString()}}</td>
	            <td>
	              <span class="{{$suplier->active ? 'active' : ''}}"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></span>
	            </td>
	          </tr>
	          @endforeach
	        </tbody>
	      </table>
	    </div>
	    <footer class="panel-footer">
	      <div class="row">
	        <div class="col-sm-4 hidden-xs">
	          <select class="input-sm form-control w-sm inline v-middle">
	            <option value="0">Bulk action</option>
	            <option value="1">Delete selected</option>
	          </select>
	          <button type="submit" class="btn btn-sm btn-default">Apply</button>                  
	        </div>
	        <div class="col-sm-4 text-center">
	          <small class="text-muted inline m-t-sm m-b-sm">showing {{count($supliers)}} items</small>
	        </div>
	        <div class="col-sm-4 text-right text-center-xs">                
	          <ul class="pagination pagination-sm m-t-none m-b-none">
	            <li><a href><i class="fa fa-chevron-left"></i></a></li>
	            <li><a href>1</a></li>
	            <li><a href><i class="fa fa-chevron-right"></i></a></li>
	          </ul>
	        </div>
	      </div>
	    </footer>
  	</div>

@endsection
