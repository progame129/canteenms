<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'category';
    protected $dates = ['deleted_at'];

    public static function installCategory($newsJson)
    {
        try {
            $category = new Category();
            $category->name = $newsJson['name'];
            $category->save();
            return $category;
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }
    public static function list()
    {
        try {
            $list = Category::all();
            return $list;
        } catch (Exception $e) {
            return null;
        }
    }
}
