@extends('layouts.app')

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
				  	<button type="submit" class="btn btn-primary">Publish</button>
				</form>
				<br>
            </div>
        </div>
    </div>
</div>

@endsection