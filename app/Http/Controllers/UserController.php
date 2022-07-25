<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){
     return view('users');
}
    public function create(Request $request){
        $user = new User;
       $user ->Name = $request->Name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        $request->session()->put('success','User has been created successfully.');
        return redirect('users');
    }

    public function getusers(){
        $users = User::all();
        return view('getusers', ['users' => $users]);
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
       //Session::put('success', "User details Deleted");
        return redirect('/getusers');
      }

    public function view($id){
        $user = User::find($id);
        return view("userview", ['user' => $user]);
         }

    public function update(Request $request){
        $user = User::find($request->id);
        $user->Name = $request->Name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
       $request->Session()->put('success', "User details Updated");
        return redirect('/getusers');
    }

}