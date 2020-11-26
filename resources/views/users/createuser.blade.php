@extends('includes.app')

@section('main-body')

<div class="app-main__outer">
    <div class="app-main__inner">
		<div class="row create-user">
			<div class="col-md-10">

			<div class="main-card mb-3 card">
				<div class="card-header"><h5 class="card-title">Add New User</h5></div>
			     <div class="card-body">
			         <form action="/users" method="POST">
						@csrf
						  <div class="form-group">
						    <label for="name">Name </label>
						    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="John Doe">

							@error('name')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
						  </div>

						  
						  <div class="form-group">
						    <label for="email">Email address</label>
						    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com">

							@error('email')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
						  </div>

						  <div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" class="form-control @error('password') is-invalid @enderror" id="email" name="password" placeholder="Enter Password">

							@error('password')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
						  </div>

						  <input type="submit" name="submit" class="btn btn-primary" value="Create User">

								 <!--  <div class="form-group">
								    <label for="exampleFormControlTextarea1">Example textarea</label>
								    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								  </div> -->
						</form>
			        </div>
			    </div>
			</div>
		</div>
	</div>    	
</div> 
@endsection