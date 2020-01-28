<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Session;
use DB;
use App\Order;
use App\Paypal;
use Illuminate\Support\Str;

use App\Product;
use App\User;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $user_id = Auth::id();

        $ordenes = Order::where('user_id',$user_id)->get();
        $usuario = User::find($user_id);

        return view('frontend.usuario.index',['ordenes'=>$ordenes,'usuario'=>$usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function configuracion()
    {

        $user_id = Auth::id();
        $usuario = User::find($user_id);

        return view('frontend.usuario.configuracion',['usuario'=>$usuario]);
    }

    public function updatedatos(Request $request){


        $user = User::find($request->user_id);

        $user->name = $request->name;
        $user->email =$request->email;

        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->back()->with('success', ['Producto agregado al carrito']);

    }


}
