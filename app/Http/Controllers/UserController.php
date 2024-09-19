<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser()  {
        return 'hello user';
    }
    function getUserName($name)  {
        return view('getuser', ['name'=>$name]);
    }
    // get view page
    function getViewPage()  {
        return view('test');
    }

    function adminName($name)  {
        return view('admin.login', ['user'=>$name]);
    }
}
