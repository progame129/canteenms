<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function showHome(Request $request){
    	return view('index');
    }
    public function showContacts(Request $request){
    	return view('contacts');
    }
}
