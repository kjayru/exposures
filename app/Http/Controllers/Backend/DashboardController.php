<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Order;
use App\Role;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $rol = Role::where('id',3)->first();

        $users = $rol->users;
        $orders = Order::count();

        return view('backend.dashboard',['users'=>$users,'orders'=>$orders]);
    }


}
