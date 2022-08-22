<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

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

    public function getParentKeyName()
    {
        return 'parent_id';
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


    public static function categorias()
    {
        $men = new Category();
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
