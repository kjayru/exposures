<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function billing(){
        return $this->belongsTo(Billing::class);
    }

    public function payment(){
        return $this->hasOne(Payment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


    public static function getNameProducts($cart){

        if(!empty($cart)){
            $cadena = null;
            $productos = unserialize($cart);
            $i=0;
            $list = '<ul>';
            foreach($productos->items as $k => $producto){

                $list.='<li>'.$producto['item']->name.'<span style="color:red">';
                    ($producto['item']->discount)? $producto['item']->discount : '';
                $list.='</span></li>';
            }
            echo $list.='</ul>';
        }else{
            echo "vacio";
        }
    }
}
