<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public function products(){
        return $this->hasMany(Product::class,'brand_id');
    }


    public function getChildren($data, $line)
    {


        $children = [];
        foreach ($data as $line1) {
            if ($line['id'] == $line1['parent_id']) {
                $children = array_merge($children, [ array_merge($line1, ['submenu' => $this->getChildren($data, $line1) ]) ]);
            }
        }
        return $children;
    }


    public function optionsMenu()
    {
        return $this->orderby('order')
            ->get()
            ->toArray();
    }


    public static function menusmarca()
    {
        $menus = new Marca();
        $data = $menus->optionsMenu();


        $menuAll = [];
        foreach ($data as $line) {
            if($line['parent_id']==null){
                $item = [ array_merge($line, ['submenu' => $menus->getChildren($data, $line) ]) ];
                $menuAll = array_merge($menuAll, $item);
            }
        }
        return $menus->menuAll = $menuAll;
    }




    public function getChild($data, $line)
    {
        $children = [];
        foreach ($data as $line1) {
            if ($line['id'] == $line1['parent_id']) {
                $children = array_merge($children, [ array_merge($line1, ['subitem' => $this->getChild($data, $line1) ]) ]);
            }
        }
        return $children;
    }


    public function options()
    {
        return $this->orderby('order')
            ->get()
            ->toArray();
    }


    public static function marcas()
    {
        $men = new Marca();
        $data = $men->options();


        $menutotal = [];
        foreach ($data as $line) {
            if($line['parent_id']==null){
                $items = [ array_merge($line, ['subitem' => $men->getChild($data, $line) ]) ];
                $menutotal = array_merge($menutotal, $items);
            }
        }
        return $men->menutotal = $menutotal;
    }


}
