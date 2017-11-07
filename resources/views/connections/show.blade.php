@extends('layouts.pages.inner')

@section('dashboardcontent')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Edit {{$connection->name}}</div>

				<hr>
				<form method="POST" action="/connections/update/{{$connection->id}}">
					{{ csrf_field() }}
				  	<div class="form-group">
					    <label for="name">Name *:</label>
					    <input type="text" class="form-control" id="name" name="name" value="{{$connection->name}}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="type">Type:</label>
					    <select id="type" name="type" class="form-control" required>
					    	<option value="" style="background:#ccc;">{{$connection->type}}</option>
					    	<option value="mysql">MySQL</option>
					    	<option value="sql">SQL</option>
					    	<option value="oracle">Oracle</option>
					    	<option value="ftp">FTP</option>
					    </select>
				  	</div>
				  	<div class="form-group">
					    <label for="name">Host *:</label>
					    <input type="text" class="form-control" id="host" name="host" value="{{$connection->host}}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="name">Port *:</label>
					    <input type="number" min="1" class="form-control" id="port" name="port" value="{{$connection->port}}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="name">Database *:</label>
					    <input type="text" class="form-control" id="database" name="database" value="{{$connection->database}}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="name">Username *:</label>
					    <input type="text" class="form-control" id="username" name="username" value="{{$connection->username}}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="name">Password *:</label>
					    <input type="password" class="form-control" id="password" name="password" value="{{$connection->password}}" required>
				  	</div>
			  		<div class="form-group">
					    <div class="checkbox">
                            <label class="i-checks">
                                <input type="checkbox" name="active" {{$connection->active ? 'checked' : ''}}><i></i> Active?
                            </label>
                        </div>
				  	</div>
				  	<button type="submit" class="btn btn-primary">Update</button>
				</form>
				<br>
				<form method="POST" action="/connections/delete/{{$connection->id}}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
				  	<button type="submit" class="btn btn-primary">Delete Supplier</button>
				</form>
            </div>
        </div>
    </div>
</div>

@endsection