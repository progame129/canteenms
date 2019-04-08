<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class handleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleRequestCategory(Request $request)
    {
        $addDB = $request->all();
        $category = new Category();
        $category->name = $addDB['nameCategory'];
        $category->save();
        return Redirect::route('danh-muc-san-pham');
    }

    public function handleRequestProduct(Request $request)
    {
        $addDB = $request->all();
        $product = new Product();
        $product->name = $addDB['txtNameProduct'];
        $product->price = $addDB['txtPrice'];
        $product->id_category = $addDB['id_category'];
        $product->description = $addDB['description'];
        $product->img = $addDB['fImages'];
        $product->save();
        return Redirect::route('danh-sach-san-pham');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['title'] = 'Edit';
        //$product = DB::table('product')->where('id', $id)->get();
        $categories = DB::table('category')
            ->orderBy('id', 'desc')
            ->get();
        $product = DB::table('product')
            ->where('id', $id)
            ->first();
        $data['categories'] = $categories;
        $data['product'] = $product;
        return view('product_edit', ['product' => $product, 'categories' => $categories]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        try {
            $product = DB::table('product')
                ->where('id', $id)
                ->first();
            if ($product != null) {
                $product = new Product();
                $product->name = $request['txtNameProduct'];
                $product->price = $request['txtPrice'];
                $product->id_category = $request['id_category'];
                $product->description = $request['description'];
                $product->img = $request['fImages'];
                $product->save();
                return Redirect::route('danh-sach-san-pham');
            } else {
                return response()->json("News doesn't exist", 404);
            }
        } catch (\Exception $exception) {
            return response()->json($exception->getMessage(), 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $product = Product::getByIdProduct($id);
            if ($product != null) {
                Product::deleteProduct($product);
                return response()->json(array('Delete success'), 200);
            } else {
                return response()->json("Doesn't exist", 404);
            }
        } catch (\Exception $exception) {
            return response()->json($exception->getMessage(), 500);
        }
    }
}
