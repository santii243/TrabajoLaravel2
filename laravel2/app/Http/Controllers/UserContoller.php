<?php

namespace App\Http\Controllers;

use API;
use App\User;
use App\cicle;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return API::ok('listado de usuarios', $users);
    }
}
