@extends('includes.app')

@section('main-body')

<div class="app-main__outer">
    <div class="app-main__inner">
		<div class="row create-user">
			<div class="col-md-10">
			<div class="main-card mb-3 card">
				<div class="card-header"><h5 class="card-title">Add New Post</h5></div>
			     <div class="card-body">
			         <form action="/posts" method="POST">
						@csrf
						 <div class="form-group">
						    <label for="user_id">User Id </label>
						    <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" placeholder="Enter user id">

							@error('user_id')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
						  </div>

						  <div class="form-group">
						    <label for="title">Post Title </label>
						    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter Title">

							@error('title')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
						  </div>

						  <div class="form-group">
						    <label for="tags">Select Tags</label>
						    <br>
							<select class="js-example-basic-multiple" name="tags[]" multiple="multiple">
							  @foreach($tags as $tag)
							   <option value="{{$tag->id}}">{{$tag->name}}</option>
							  @endforeach				  
							</select>

							@error('tags')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
						  </div>

						  <div class="form-group">
						    <label for="description">Description</label>
						    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Write description"></textarea>
							@error('description')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
						  </div>
						  <input type="submit" name="submit" class="btn btn-primary" value="Submit Post">
						</form>
			        </div>
			    </div>
			</div>
		</div>
	</div>   
</div>
@endsection