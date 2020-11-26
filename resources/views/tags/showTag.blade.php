@extends('includes.app')
@section('main-body')

<div class="app-main__outer">
    <div class="app-main__inner">
		<div class="row create-user">
			<div class="col-md-10">
				<div class="main-card mb-3 card">
				<div class="card-header"><h5 class="card-title">Tag Detail</h5></div>
			     <div class="card-body show-card">
					  <div class="form-group">
					    <label for="name">Tag Name </label>
					    <p>{{$tag->name}}</p>
					    
					  </div>

					  
					  <div class="form-group">
					    <label for="created_at">Created At</label>
					    <p>{{$tag->created_at}}</p>
					  </div>

					  <div class="form-group">
					    <label for="updated_at">Updated At</label>
					    <p>{{$tag->updated_at}}</p>
					  </div>

					  <div class="form-group">
					    <label for="">Posts</label>
					    <ol>
						    @foreach($tag->posts as $post)
					    	<li>Post Title : {{$post->title}}</li>
					    	@endforeach
					    </ol>
					  </div>

					  <!-- <input type="submit" name="submit" class="btn btn-primary" value="Create User"> -->

							 <!--  <div class="form-group">
							    <label for="exampleFormControlTextarea1">Example textarea</label>
							    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							  </div> -->
			        </div>
			        <div class="card-footer">
					  	<a href="{{url('/tags/'.$tag->id.'/edit')}}" class="btn btn-primary">Edit Tag</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>    	
</div>
@endsection