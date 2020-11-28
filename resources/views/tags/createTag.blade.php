@extends('includes.app')

@section('main-body')

<div class="app-main__outer">
    <div class="app-main__inner">
		<div class="row create-user">
			<div class="col-md-10">

			<div class="main-card mb-3 card">
				<div class="card-header"><h5 class="card-title">Add New Tag</h5></div>
			     <div class="card-body">
			         <form action="/tags" method="POST">
						@csrf
						  <div class="form-group">
						    <label for="name">Tag Name </label>
						    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Tag name">

							@error('name')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
						  </div>

						  <input type="submit" name="submit" class="btn btn-primary" value="Create Tag">
						</form>
			        </div>
			    </div>
			</div>
		</div>
	</div>  
</div>	
@endsection