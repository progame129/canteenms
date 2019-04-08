<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CategoryController extends Controller
{
    public function deleteCategory(Request $request)
    {
    	echo $request->id;
    	DB::table('category')
            ->where('id', $request->id)
            ->delete();

    	return redirect()->route('danh-muc-san-pham');
    }
     public function editCategory(Request $request)
    {
        $id = 0;
        if (isset($request->id)&& $request->id>0){
            $id = $request->id;
            $std =DB::table('category')
                ->where ('id',$id)
                ->get();
        }
    }
}