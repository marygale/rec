<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Users extends Controller
{
    public function index($iId = null){
        if($iId == null){
            return User::orderBy('id', 'asc')->get();
        }else{
            return $this->show($iId);
        }
    }

    public function store(Request $request){
        $oUser = new User;
        $oUser->name    = $request->input('name');
        $oUser->email   = $request->input('email');
        $oUser->save();
        return 'User successfully created with id ' . $oUser->id;
    }

    public function show($iId){
        return User::find($iId);
    }

    public function update(Request $request, $iId){
        $user  = User::find($iId);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        //$user->email = $request->input('password');
        $user->save();

        return 'User updated successfully with id ' .$user->id;
    }

    public function destroy(Request $request) {
        $user = User::find($request->input('id'));

        $user->delete();

        return "User record successfully deleted #" . $request->input('id');
    }

}
