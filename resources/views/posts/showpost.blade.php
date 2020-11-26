@extends('includes.app')
@section('main-body')

<div class="app-main__outer">
    <div class="app-main__inner">
		<div class="row create-user">
			<div class="col-md-10">

			<div class="main-card mb-3 card">
				<div class="card-header"><h5 class="card-title">Post Detail</h5></div>
			     <div class="card-body show-card">
					@csrf
					  <div class="form-group">
					    <label for="title">Post Title </label>
					    <p>{{$post->title}}</p>
					    
					  </div>

					  
					  <div class="form-group">
					    <label for="description">Post Description</label>
					    <p>{{$post->description}}</p>
					  </div>

					   <div class="form-group">
					    <label for="writter">Written By</label>
					    <p>{{$post->user->name}}</p>
					  </div>

					   <div class="form-group">
					    <label for="tags">Post Tags</label>
					    	<br>
						    @foreach ($post->tags as $tag)
						    	{{$tag->name}},
						    @endforeach					    	
					    
					  </div>
			        </div>
			        <div class="card-footer">			        	
					    <a href="{{url('/posts/'.$post->id.'/edit')}}" class="btn btn-primary">Edit Post</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>    	
  </body>

  @endsection