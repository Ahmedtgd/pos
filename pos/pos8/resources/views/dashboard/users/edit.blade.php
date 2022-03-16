@extends('layouts.dashboard.app')
@section('content')

  <div class="card "  style="width: 50rem;">
    <div class="card-header ">
      <h1> EDIT USER</h1>
    </div>
    <div class="card-body">

  <form action="{{ route('users.update',$users->id) }}" method="POST">
   @csrf
    @method('put')

  <input type="text" name="id" value="{{$users->id}}" class="form-control" placeholder="ID" />
  </br>
   <input type="text" name="first_name" value="{{$users->first_name}}" class="form-control" placeholder="First name" />
 </br>
  <input type="text" name="last_name" value="{{$users->last_name}}" class="form-control" placeholder="Last name" />
  </br>
   <input type="text" name="email" value="{{$users->email}}" class="form-control" placeholder="EMAIL" />
  </br>
   <input type="text" name="password" value="{{--$users->password--}}" class="form-control" placeholder="PASSWORD" />
  </br>

<!---checkbox ----------->
  <div class="col-12 col-sm-6">
    <div class="card card-primary card-tabs">
      <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
          <li class="pt-2 px-3"><h3 class="card-title">Card Title</h3></li>
          <li class="nav-item">
            <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Messages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill" href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings" aria-selected="false">Settings</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content" id="users">
          <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
         <!-- check box -->
            <div class="form-check">
              <input type="hidden" name="pemissions[]" value="0" id="users_create" />
              <input class="form-check-input" type="checkbox" name="permissions[]" {{$users->hasPermission('users_create') ? 'checked' : ''}}  value="{{$users->users_create }}"   id="users_create"  >
              <label class="form-check-label" for="flexCheckDefault">
              Create
              </label>
            </div>
            <div class="form-check">
              <input type="hidden" name="pemissions[]" value="0" id="users_read" />
              <input class="form-check-input" type="checkbox" name="permissions[]" {{$users->hasPermission('users_read') ? 'checked' : ''}}    value="{{$users->users_read}}"   id="users_read"   >
              <label class="form-check-label" for="flexCheckDefault">
                Read
              </label>
            </div>
            <div class="form-check">
              <input type="hidden" name="pemissions[]" value="0" id="users_update" />
              <input class="form-check-input" type="checkbox" name="permissions[]"  {{$users->hasPermission('users_update') ? 'checked' : ''}} value="{{$users->users_update}}"  id="users_update"   >
              <label class="form-check-label" for="flexCheckDefault">
                Update
              </label>
            </div>
            <div class="form-check">
              <input type="hidden" name="pemissions[]" value="0" id="users_delete" />
              <input class="form-check-input" type="checkbox" name="permissions[]"  {{$users->hasPermission('users_delete') ? 'checked' : ''}}  value="{{$users->users_delete}}" id="users_delete"   >
              <label class="form-check-label" for="flexCheckDefault">
                Delete
              </label>
            </div>
                <!--end of checkbox -->
          </div>
          <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
             Mauris
          </div>
          <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
             Morbi
             </div>
          <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">
             Pellentesque .
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>
<!-- end of checkbox -->
  <a  class="btn btn-warning" href="/users"> Returne without Saving  </a>
  <input class="btn btn-success"  type="submit" value="Confirm changes">

  </form>


    </div>
  </div>



@endsection
