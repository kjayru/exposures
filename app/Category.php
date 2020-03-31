<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function product(){
        return $this->belongsToMany(Product::class);
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


    public static function menus()
    {
        $menus = new Category();
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

}
