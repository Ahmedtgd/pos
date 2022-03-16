
@extends('layouts.dashboard.aside')
@section('content')
{{--@if (Laratrust::isAbleTo('users_read'))--}}
{{-- @if (Laratrust::hasRole('admin')) --}}
    <div class="row justify-content-center">
        <div class="col-md-20  ">
            <div class="card">
                <div class="card-header justify-content-center"><h1> users home page </h1></div>
                <!---search icon------------------------------>
  <div class="container-sm">
                <form  action="/search" method="get" class= "container-sm">
                  &#160;<div class="input-group">
                    <input type="search" name="users" class="form-control"  placeholder="Search by First name">
                    <span class="input-group-prepend"  >
                      <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                  </div>
                </form>
  </div>
  <!---end of search ---------------->
                <div class="card-body">
@if(Auth::user()->hasPermission('users_create'))
<a  class="btn btn-outline-success btn-lg btn-block" href="/userAdd"> Add new User   </a>
@else
  <a  class="btn btn-outline-success btn-lg btn-block disabled" href=""> Add new User   </a>

@endif
                 <table class="table table-striped">
                   <thead>
                     <tr>
                       <th scope="col">ID</th>
                       <th scope="col">First Name</th>
                       <th scope="col">Last Name</th>
                       <th scope="col">Email</th>
                    <!--   <th scope="col">Password</th> -->
                      <th scope="col">  &nbsp;</th>
                       <th scope="col"> Edit</th>
                       <th scope="col">  Delete</th>

                     </tr>
                   </thead>
                   <tbody>
                     @foreach($users as $index=>$user)
                    <tr>
                      <td>{{$user->id}}</td>
                      <td> {{$user->first_name}}</td>
                      <td> {{$user->last_name}}</td>
                      <td> {{$user->email}}</td>
                       <td> {{--$user->password--}}</td>
                       <td>
                     <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                    @if(Auth::user()->hasPermission('users_update'))
                   <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                 @else
                    <a class="btn btn-outline-primary disabled" href="">EDIT</a>
                 @endif
                 </td>
                 <td>
                 @if(Auth::user()->hasPermission('users_delete'))
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger">Delete</button>
                   @else
                      <a class="btn btn-outline-danger disabled" href="">Delete</a>
                 @endif
               </td>
                   </tr>

                 </form>

        @endforeach

                  </tbody>
                </table>
                <div class="paginations col-lg-12">
                                {!! $users->links() !!}
                               </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{--@endif--}}
@endsection
</html>
