@extends('includes.app')
@section('main-body')

<div class="app-main__outer">
    <div class="app-main__inner">
		<div class="row create-user">
			<div class="col-md-10">

			<div class="main-card mb-3 card">
				<div class="card-header"><h5 class="card-title">User detail information</h5></div>
			     <div class="card-body show-card">
			         <form action="/users" method="POST">
						@csrf
						  <div class="form-group">
						    <label for="name">Name </label>
						    <p>{{$user->name}}</p>
						    
						  </div>

						  
						  <div class="form-group">
						    <label for="email">Email address</label>
						    <p>{{$user->email}}</p>
						  </div>

						  <div class="form-group">
						    <label for="address">Addresses</label>
						    <ol>
							    @foreach($user->addresses as $address)
						    	<li>{{$address->country}}</li>
						    	@endforeach
						    </ol>
						  </div>

						  <div class="form-group">
						    <label for="">Posts</label>
						    <ol>
							    @foreach($user->posts as $post)
						    	<li>Post Title : {{$post->title}}</li>
						    	@endforeach
						    </ol>
						  </div>

						  <!-- <input type="submit" name="submit" class="btn btn-primary" value="Create User"> -->

								 <!--  <div class="form-group">
								    <label for="exampleFormControlTextarea1">Example textarea</label>
								    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								  </div> -->
						</form>
			        </div>
			        <div class="card-footer">
					  	<a href="{{url('/users/'.$user->the_id.'/edit')}}" class="btn btn-primary">Edit User</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>    	
</div>
@endsection