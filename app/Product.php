<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsToMany(Category::class);
    }

    public function marca(){
        return $this->belongsToMany(Marca::class);
    }

    public function multimedias(){
        return $this->belongsToMany(Multimedia::class);
    }

    public function activity(){
        return $this->belongsTo(Activity::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function galleries(){
        return $this->hasMany(Gallery::class);
    }

    public static function productosCategory($cat,$subcat){
        $categoria = Category::where('slug',$cat)->first();

        $arreglo = collect();

       $categorias = Category::where('parent_id',$categoria->id)->get();

       foreach($categorias as $sp){

        $products = Product::where('category_id',$sp->id)->get();

        foreach($products as $prod){
            $data = [
                'id' => $prod->id,
                'name'=> $prod->name,
                'statement' => $prod->statement,
                'slug'  => $prod->slug,
                'imagen' => $prod->imagen,
                'price' => $prod->price,
                'peso' => $prod->peso,
                'excerpt' => $prod->excerpt,
                'description' => $prod->description,
                'outlet' => $prod->outlet,
                'discount' => $prod->discount,
                'order' => $prod->order,
                'categoria'=>$cat

            ];

         $arreglo->push($data);
        }

       }

        return collect($arreglo->all());
    }




    public static function productosMarca($cat,$subcat){
        $categoria = Category::where('slug',$cat)->first();

        $arreglo = collect();

       $categorias = Category::where('parent_id',$categoria->id)->get();

       foreach($categorias as $sp){

        $products = Product::where('category_id',$sp->id)->get();

        foreach($products as $prod){
            $data = [
                'id' => $prod->id,
                'name'=> $prod->name,
                'statement' => $prod->statement,
                'slug'  => $prod->slug,
                'imagen' => $prod->imagen,
                'price' => $prod->price,
                'peso' => $prod->peso,
                'excerpt' => $prod->excerpt,
                'description' => $prod->description,
                'outlet' => $prod->outlet,
                'discount' => $prod->discount,
                'order' => $prod->order,
                'categoria'=>$cat

            ];

         $arreglo->push($data);
        }

       }

        return collect($arreglo->all());
    }
}

