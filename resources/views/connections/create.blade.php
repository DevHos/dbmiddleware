@extends('layouts.pages.inner')

@section('dashboardcontent')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Add Connection</div>

				<hr>
				<form method="POST" action="/connections">
					{{ csrf_field() }}
				  	<div class="form-group">
					    <label for="name">Name *:</label>
					    <input type="text" class="form-control" id="name" name="name" required>
				  	</div>
				  	<div class="form-group">
					    <label for="type">Type:</label>
					    <select id="type" name="type" class="form-control">
					    	<option value="mysql">MySQL</option>
					    	<option value="sql">SQL</option>
					    	<option value="oracle">Oracle</option>
					    	<option value="ftp">FTP</option>
					    </select>
				  	</div>
				  	<div class="form-group">
					    <label for="suplier_id">Supplier:</label>
					    <select id="suplier_id" name="suplier_id" class="form-control">
					    	@foreach ($connection->suplier as $supplier)
					    		<option value="{{$supplier->id}}">{{$supplier->name}}</option>
					    	@endforeach
					    </select>
				  	</div>
				  	<div class="form-group">
					    <label for="name">Host *:</label>
					    <input type="text" class="form-control" id="host" name="host" required>
				  	</div>
				  	<div class="form-group">
					    <label for="name">Port *:</label>
					    <input type="number" min="1" class="form-control" id="port" name="port" required>
				  	</div>
				  	<div class="form-group">
					    <label for="name">Database *:</label>
					    <input type="text" class="form-control" id="database" name="database" required>
				  	</div>
				  	<div class="form-group">
					    <label for="name">Username *:</label>
					    <input type="text" class="form-control" id="username" name="username" required>
				  	</div>
				  	<div class="form-group">
					    <label for="name">Password *:</label>
					    <input type="password" class="form-control" id="password" name="password" required>
				  	</div>
			  		<div class="form-group">
					    <div class="checkbox">
                            <label class="i-checks">
                                <input type="checkbox" name="active"><i></i> Active?
                            </label>
                        </div>
				  	</div>
				  	<button type="submit" class="btn btn-primary">Publish</button>
				</form>
				<br>
            </div>
        </div>
    </div>
</div>

@endsection