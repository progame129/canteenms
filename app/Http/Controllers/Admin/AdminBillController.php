<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Bill;
class AdminBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['title'] = 'Quản lý đơn hàng';
        $customers = DB::table('customer')
        ->orderBy('id', 'asc')
        ->join('bills', 'customer.id', '=', 'bills.customer_id')
        ->select('customer.*', 'bills.id as bill_id', 'bills.status as bill_status')
        ->get();
        $data['customers'] = $customers;
        return view('adminlte::layouts.danh-sach-don-hang', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $customerInfo = DB::table('customer')
        ->join('bills', 'customer.id', '=', 'bills.customer_id')
        ->select('customer.*', 'bills.id as bill_id', 'bills.total as bill_total')
        ->where('customer.id', '=', $id)
        ->first();

        $billInfo = DB::table('bills')
        ->join('bill_details', 'bills.id', '=', 'bill_details.bill_id')
        ->leftjoin('product', 'bill_details.product_id', '=', 'product.id')
        ->where('bills.customer_id', '=', $id)
        ->select('bills.*', 'bill_details.*', 'product.name as product_name')
        ->get();

        $data['customerInfo'] = $customerInfo;
        $data['billInfo'] = $billInfo;

        return view('adminlte::layouts.chi-tiet-don-hang', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bill = Bill::find($id);
        $bill->status = $request->input('status');
        $bill->save();
        Session::flash('message', "Successfully updated");

        return Redirect::to('danh-sach-don-hang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bill = Bill::find($id);
        $bill->delete();
        Session::flash('message', "Successfully deleted");

        return Redirect::to('danh-sach-don-hang');
    }
}
