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
    public function showAbout(Request $request){
    	return view('about');
    }
    public function showMenu(Request $request){
    	return view('menu');
    }
    public function showNew(Request $request){
    	return view('new');
    }
    public function showBunbo(Request $request){
        return view('bunbo');
    }
}
