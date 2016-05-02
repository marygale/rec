<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index($aUser = null){

        $aData = array(
            'pagename' => 'Register'
        );
        return View('home', ['aData' => $aData]);

    }
}
