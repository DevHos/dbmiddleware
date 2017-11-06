@extends('layouts.pages.inner')

@section('dashboardcontent')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Add Supplier</div>

				<hr>
				<form method="POST" action="/supliers">
					{{ csrf_field() }}
				  	<div class="form-group">
					    <label for="name">Name *:</label>
					    <input type="text" class="form-control" id="name" name="name" required>
				  	</div>
				  	<div class="form-group">
					    <label for="description">Description:</label>
					    <textarea id='description' name='description' class="form-control"></textarea>
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