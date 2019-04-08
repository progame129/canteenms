<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FontendController extends Controller
{
    public function showHome(Request $request)
    {
        return view('index');
    }

    public function showContacts(Request $request)
    {
        return view('contacts');
    }

    public function showAbout(Request $request)
    {
        return view('about');
    }

    public function showMenu(Request $request)
    {
        return view('menu');
    }

    public function showNew(Request $request)
    {
        return view('new');
    }

    public function showProduct_add(Request $request)


    {
        $data = [];
        $data['title'] = 'Quản lý danh mục';
        $categories = DB::table('category')
            ->orderBy('id', 'desc')
            ->get();
        $data['categories'] = $categories;
        return view('product_add',$data);
    }




    public function showCategory_add(Request $request)
    {
        return view('category_add');
    }

    public function handleRequest(Request $request)
    {
        Category::installCategory($request);

        return view('category_add');
    }
    public function handleRequestProduct(Request $request)
    {
        Product::installProduct($request);

        return view('product_add');
    }
}
