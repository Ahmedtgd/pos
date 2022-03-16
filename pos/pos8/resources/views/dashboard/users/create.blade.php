@extends('layouts.dashboard.app')
@section('content')
  <div class="container-sm col-12 ">
    <html>
    <head>
    <h1> ADD User </h1>
    </head>
    <body>


    <form action="userAdd" method="POST">
    {{ csrf_field() }}
    {{ method_field('post')}}
{{--
<div class="form-group">
  <lable><h1> Products</h1></lable>
<select name="pid" class="form-control">
  <option value="">Products</option>
  @foreach($products as $product)
    <option value="{{$product->id}}">{{$product->name}}</option>
@endforeach
</select>
</div>
--}}
    <div class="form-group{{$errors -> has('id') ? 'has-error' : ''}}">
     <input type="text" name="id" value="{{Request::old('id')}}" class="form-control"  placeholder="ID" />
    </div>
    </br>
    <div class="form-group{{$errors -> has('first_name') ? 'has-error' : ''}}">
     <input type="text" name="first_name" value="{{Request::old('first_name')}}"  class="form-control" placeholder="First name" />
    </div>
    </br>
    <div class="form-group{{$errors -> has('last_name') ? 'has-error' : ''}}">
    <input type="text" name="last_name" value="{{Request::old('last_name')}}"  class="form-control" placeholder="Last name" />
    </div>
  </br>
    <div class="form-group{{$errors -> has('email') ? 'has-error' : ''}}">
     <input type="text" name="email" value="{{Request::old('email')}}" class="form-control"  placeholder="EMAIL" />
    </div>
    </br>
    <div class="form-group{{$errors -> has('password') ? 'has-error' : ''}}">
     <input type="text" name="password" value="{{Request::old('password')}}" class="form-control"  placeholder="PASSWORD" />
    </div>
    </br>


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
                          <input class="form-check-input" type="checkbox" name="permissions[]" value="users_create" id="users_create">
                          <label class="form-check-label" for="flexCheckDefault">
                          Create
                          </label>
                        </div>
                        <div class="form-check">
                            <input type="hidden" name="pemissions[]" value="0" id="users_read" />
                          <input class="form-check-input" type="checkbox" name="permissions[]" value="users_read" id="users_read">
                          <label class="form-check-label" for="flexCheckDefault">
                            Read
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="hidden" name="pemissions[]" value="0" id="users_update" />
                          <input class="form-check-input" type="checkbox" name="permissions[]"  value="users_update" id="users_update">
                          <label class="form-check-label" for="flexCheckDefault">
                            Update
                          </label>
                        </div>
                        <div class="form-check">
                          <input type="hidden" name="pemissions[]" value="0" id="users_delete" />
                          <input class="form-check-input" type="checkbox" name="permissions[]"  value="users_delete" id="users_delete">
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
            </div>

    <input type="submit" name="" value="Add User"  class="btn btn-primary" >

    <a  class="btn btn-primary" href="/users"> Returne to users  </a>

    </form>

    </body>
    </html>
  </div>

@endsection
