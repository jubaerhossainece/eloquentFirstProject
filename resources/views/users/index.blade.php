@extends('includes.app')
@section('main-body')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Active Users
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
                                    <th>Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Posts</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                <tr>
                                    <td class="text-center text-muted">{{$user->the_id}}</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <!-- <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                    </div>
                                                </div> -->
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{$user->name}}</div>
                                                    <!-- <div class="widget-subheading opacity-7">Web Developer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">{{$user->email}}</td>
                                    <td class="text-center">
                                        <div class="badge badge-warning">
                                            <ol>
                                                @foreach($user->addresses as $address)
                                                <li>{{$address->country}}</li>
                                                @endforeach
                                            </ol>
                                        </div>
                                    </td>
                                    
                                    <td class="text-center">
                                        <ol>
                                            @foreach($user->posts as $post)
                                            <li>{{$post->title}}</li>
                                            @endforeach
                                        </ol>
                                    </td>
                                    <td class="text-center">

                                      <form action="/users/{{$user->the_id}}" class="action-form">
                                          @csrf
                                          <button type="submit" name="submit" class="btn-action btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="View user details">
                                          <i class="fas fa-eye"></i>
                                          </button>
                                      </form>
                                     
                                      <form action="/users/{{$user->the_id}}/edit" class="action-form">
                                          @csrf
                                          <button type="submit" name="submit" class="btn-action btn-edit btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit user info">
                                          <i class="fas fa-edit"></i>
                                          </button>
                                      </form>

                                      <form action="/users/{{$user->the_id}}" method="POST" class="action-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit" class="btn-action btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete user">
                                          <i class="fas fa-trash"></i>
                                          </button>
                                      </form>
 
                                  </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="text-center text-muted">#347</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Ruben Tillman</div>
                                                    <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">Berlin</td>
                                    <td class="text-center">
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center text-muted">#321</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Elliot Huber</div>
                                                    <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">London</td>
                                    <td class="text-center">
                                        <div class="badge badge-danger">In Progress</div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center text-muted">#55</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt=""></div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">Vinnie Wagstaff</div>
                                                    <div class="widget-subheading opacity-7">UI Designer</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">Amsterdam</td>
                                    <td class="text-center">
                                        <div class="badge badge-info">On Hold</div>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- <div class="d-block text-center card-footer">
                            <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                            <button class="btn-wide btn btn-success">Save</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
                       
    </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
@endsection

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>