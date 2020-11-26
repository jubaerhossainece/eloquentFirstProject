@extends('includes.app')

@section('main-body')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="row">
            <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Written By</th>
                        <th>Tags</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Written By</th>
                        <th>Tags</th>
                        <th>Actions</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach($posts as $post) 
                      <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->user['name']}}</td>
                        <td>
                            @foreach($post->tags as $tag)
                            {{$tag->name}},
                            @endforeach
                        </td>
                          <td class="text-center">
                              <form action="/posts/{{$post->id}}" class="action-form">
                                  @csrf
                                  <button type="submit" name="submit" class="btn-action btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="View post details">
                                  <i class="fas fa-eye"></i>
                                  </button>
                              </form>
                             
                              <form action="/posts/{{$post->id}}/edit" class="action-form">
                                  @csrf
                                  <button type="submit" name="submit" class="btn-action btn-edit btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit post">
                                  <i class="fas fa-edit"></i>
                                  </button>
                              </form>

                              <form action="/posts/{{$post->id}}" method="POST" class="action-form">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" name="submit" class="btn-action btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete post">
                                  <i class="fas fa-trash"></i>
                                  </button>
                              </form>

                          </td>
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
@endsection
