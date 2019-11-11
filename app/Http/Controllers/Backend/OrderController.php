<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Routing\UrlGenerator;

class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Order::orderBy('id','desc')->get();
        return view('backend.order.index',['ordenes'=>$ordenes]);
    }


    public function edit($id)
    {
        $order = Order::find($id);
        $previous = url()->previous();
        return view('backend.order.edit',['orden'=>$order,'previous'=>$previous]);
    }


    public function destroy($id)
    {
        //
    }
}
