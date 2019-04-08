<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductController extends Controller
{
    public function deleteProduct(Request $request)
    {
    	echo $request->id;
    	DB::table('product')
            ->where('id', $request->id)
            ->delete();

    	return redirect()->route('danh-sach-san-pham');
    }
    public function editProduct(Request $request)
    {
        $id = 0;
        if (isset($request->id)&& $request->id>0){
            $id = $request->id;
            $std =DB::table('product')
                ->where ('id',$id)
                ->get();
        }
    }
}
