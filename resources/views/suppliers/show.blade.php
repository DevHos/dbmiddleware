@extends('layouts.pages.inner')

@section('dashboardcontent')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Edit {{$suplier->name}}</div>

				<hr>
				<form method="POST" action="/supliers/update/{{$suplier->id}}">
					{{ csrf_field() }}
				  	<div class="form-group">
					    <label for="name">Name *:</label>
					    <input type="text" class="form-control" id="name" name="name" value="{{$suplier->name}}" required>
				  	</div>
				  	<div class="form-group">
					    <label for="description">Description:</label>
					    <textarea id='description' name='description' class="form-control">{{$suplier->description}}</textarea>
				  	</div>
			  		<div class="form-group">
					    <div class="checkbox">
                            <label class="i-checks">
                                <input type="checkbox" name="active" {{$suplier->active ? 'checked' : ''}}><i></i> Active?
                            </label>
                        </div>
				  	</div>
				  	<button type="submit" class="btn btn-primary">Update</button>
				</form>
				<br>
				<form method="POST" action="/supliers/delete/{{$suplier->id}}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
				  	<button type="submit" class="btn btn-primary">Delete Supplier</button>
				</form>
            </div>
        </div>
    </div>
</div>

@endsection