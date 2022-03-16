<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use DB;
use App\Models\User;
use App\Models\Permission;
use App\Models\PermissionUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Auth ;

class UserController extends Controller
{


      public function index()
      {
          $users = User::all();
          $users=User::paginate(4);
          return view('dashboard.users.index', compact('users'));
      }
      ///////////////////////////////////////////search function
      public function searchusers(Request $request)
      {
        $users = $request->get('users');
        $users = DB::table('users')->where('first_name' , 'like', '%'.$users.'%')->paginate(5);

          return view('dashboard.users.index', ['users' => $users]);
      }
      ///////////////////////////////////////////////////////////////////////

      /////////////////////////////////Users//////////////////////////////////////////////
/*
      public function addUser(Request $request){
      if($request->isMethod('post') &&  Auth::user()->hasPermission('users_create')){

      $this->validate($request,[
      // 'id' => 'required | max:5 |unique:users' ,
      ///  'price' => 'required |min:2 |max:8'
      ]);

         $users = new User();
         $autoIncId=$users->id+1;
         $users->id=$request->input('id');
         $users->first_name=$request->input('first_name');
         $users->last_name=$request->input('last_name');
         $users->email=$request->input('email');
         $users->password=Hash::make($request->input('password'));
         //$users->attachRole('admin');
         $users->syncPermissions($request->permissions);
         $users->save();
      }

                 return view('dashboard.users.create');


      }



      public function EditUser(Request $request,$id){


      if($request->isMethod('post') &&  Auth::user()->hasPermission('users_update')){

      $users= User::find($id);
    //dump($users->allPermissions());
      $autoIncId=$users->id+1;
      $users->id=$request->input('id');
      $users->first_name=$request->input('first_name');
      $users->last_name=$request->input('last_name');
      $users->email=$request->input('email');
      $users->password=Hash::make($request->input('password'));


$createUser= Permission::find($id);
if($createUser){
$id=1;
$createUser->users_create=$request->input('users_create');
$users->attachPermission($createUser);
}


    //  $permissions= Permission::find($id);
    //  $permissions->users_create=$request->input('users_create');
    //  $permissions->users_read=$request->input('users_read');
    //  $permissions->users_update=$request->input('users_update');
    //  $permissions->users_delete=$request->input('users_delete');
      //$users->syncPermissions(allPermissions());
  //   $users->allPermissions();

            $users->save();
            return redirect("users");

      }else{
      $users=User::find($id);
      $arr=Array('users'=>$users);
      return view('dashboard.users.edit',$arr);
      }

      }

*/

    public function create()
    {
$users=User::all();
 return view('dashboard.users.create',compact('users'));
}



    public function edit(User $users)
    {
      //$permissions = Permission::all();
            return view('dashboard.users.edit',compact('users'));

    }

    public function store(Request $request , User $user )
    {
      $request->validate([
      'id' => 'required',
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required',
      'password' => 'required',

  ]);
  $users->syncPermissions($request->permissions);
    }




    public function show(User $user)
      {
        return view('users.show',compact('user'));
      }



    public function update(Request $request, User $users)
    {
      $request->validate([
      'id' => 'required',
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required',
      'password' => 'required',

  ]);
  $users->syncPermissions($request->permissions);
    }


    public function destroy(User $user)
    {
      $user->delete();

return redirect()->route('dashboard.users.index')
                ->with('success','User deleted successfully');
    }
}
