<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = 'product';
    protected $dates = ['deleted_at'];

    public static function getByIdProduct($id)
    {
        try {
            $product = Product::find($id);
            return $product;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public static function installProduct($newsJson)
    {
        try {
            $product = new Product();
            $product->name = $newsJson['txtNameProduct'];
            $product->price = $newsJson['txtPrice'];
            $product->id_category = $newsJson['id_category'];
            $product->description = $newsJson['description'];
            $product->img = $newsJson['fImages'];


            $product->save();
            return $product;
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    public static function deleteProduct($product)
    {
        try {
            $product->delete();
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }
}
