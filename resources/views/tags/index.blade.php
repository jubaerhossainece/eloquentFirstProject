@extends('includes.app')
@section('main-body')
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">All Tags Available
                            <div class="btn-actions-pane-right">
                                <div role="group" class="btn-group-sm btn-group">
                                    <button class="active btn btn-focus">Last Week</button>
                                    <button class="btn btn-focus">All Month</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Tag Name</th>
                                    <th class="text-center">Created at</th>
                                    <th class="text-center">Updated at</th>
                                    <th class="text-center">Posts</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($tags as $tag)
                                <tr>
                                    <td class="text-center text-muted">{{$tag->id}}</td>
                                    
                                    <td class="text-center">{{$tag->name}}</td>
                                    <td class="text-center">{{$tag->created_at}}</td>
                                    <td class="text-center">{{$tag->updated_at}}</td>
                                    <td class="text-center">
                                        <div class="badge badge-warning">
                                            <ol>
                                                @foreach($tag->posts as $post)
                                                <li>{{$post->title}}</li>
                                                @endforeach
                                            </ol>
                                        </div>
                                    </td>
                                    <td class="text-center">

                                    <form action="/tags/{{$tag->id}}" class="action-form">
                                        @csrf
                                        <button type="submit" name="submit" class="btn-action btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="View user details">
                                        <i class="fas fa-eye"></i>
                                        </button>
                                    </form>
                                   
                                    <form action="/tags/{{$tag->id}}/edit" class="action-form">
                                        @csrf                                        <button type="submit" name="submit" class="btn-action btn-edit btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit user info">
                                        <i class="fas fa-edit"></i>
                                        </button>
                                    </form>

                                    <form action="/tags/{{$tag->id}}" method="POST" class="action-form">
                                    	@csrf
                                    	@method('DELETE')
                                    	<button type="submit" name="submit" class="btn-action btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete user">
                                        <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
 
                                  </td>
                                        <!-- <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button> -->
                                </tr>
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
                       
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
</div>
@endsection