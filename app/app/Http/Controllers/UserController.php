<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function add()
    {
    	// return view('user/app');
        echo 'hahaha';
    }

    public function insert()
    {
    	echo 'insert';
    }

    public function show($id)
    {
    	echo $id;
    }
    public function index()
    {
    	echo 'index';
    }
}
