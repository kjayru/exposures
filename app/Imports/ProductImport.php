<?php
namespace App\Imports;

use App\Multimedia;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        /*return new Product([
           'file'     => $row[1],
           'product_id'    => $row[2],

        ]);*/


        //$file = explode("-",$row[1]);
/*
        echo $row[1]."<br>";
        $producto = new Multimedia();


        $imagen = "products/".$row[1];
        $producto->file = $imagen;
        $producto->save();
*/
    }
}
