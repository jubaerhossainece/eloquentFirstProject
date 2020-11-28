@extends('includes.app')

@section('main-body')

<div class="app-main__outer">
    <div class="app-main__inner">
		<div class="row create-user">
			<div class="col-md-10">
			<div class="main-card mb-3 card">
				<div class="card-header"><h5 class="card-title">Edit Post</h5></div>
			     <div class="card-body">
			         <form action="/posts/{{$post->id}}" method="POST">
						@csrf
						@method('PUT')
						  <div class="form-group">
						    <label for="title">Post Title </label>
						    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter Title" value="{{$post->title}}">

							@error('title')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
						  </div>

						  <div class="form-group">
						    <label for="tags">Select Tags</label>
						    <br>
							<select id="editpost-multiselect" name="tags[]" selected="selected" multiple="multiple">
							  @foreach($allTags as $tag)
							   <option <?php if(!empty($tagId)){if(in_array($tag->id, $tagId)){ echo "selected"; } } ?> value="{{$tag->id}}">{{$tag->name}}</option>
							  @endforeach				  
							</select>

							@error('tags')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
						  </div>

						  <div class="form-group">
						    <label for="description">Description</label>
						    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Write description">{{$post->description}}</textarea>
							@error('description')
							    <div class="alert alert-danger">{{ $message }}</div>
							@enderror
						  </div>
						  <input type="submit" name="submit" class="btn btn-primary" value="Update Post">
						</form>
			        </div>
			    </div>
			</div>
		</div>
	</div>   
</div>	
@endsection