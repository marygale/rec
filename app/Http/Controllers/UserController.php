<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index($iId = null){
        if($iId == null){
            return User::orderBy('id', 'asc')->get();
        }else{
            return $this->show($iId);
        }
    }

    public function store(Request $request){

        $bStatus = false;
        $oUser = new User;
        $pass = $request->input('password');
        $email = $request->input('email');
        $conpassword = $request->input('conpassword');

        if($pass != $conpassword){
            $msg = 'Password and confirm password must be the same';
        }elseif (User::where('email', '=', $email)->exists()) {
            $msg = 'Email already registered';
        }else{
            $oUser->name    = $request->input('name');
            $oUser->email   = $email;
            $oUser->password = bcrypt($pass);
            $oUser->save();
            $bStatus = true;
            $msg = 'User successfully created an account';
        }
        return $oResponse = array(
                    'status' => $bStatus,
                    'message' => $msg
               );
    }

    public function show($iId){
        return User::find($iId);
    }

    public function update(Request $request, $iId){
        $oUser  = User::find($iId);
        $pass = $request->input('password');

        $oUser->name = $request->input('name');
        $oUser->email = $request->input('email');
        $oUser->password = bcrypt($pass);
        $oUser->save();

        return 'User updated successfully with id ' .$oUser->id;
    }

    public function destroy(Request $request) {
        $user = User::find($request->input('id'));
        $user->delete();
       return "User record successfully deleted #" . $request->input('id');
    }
}
