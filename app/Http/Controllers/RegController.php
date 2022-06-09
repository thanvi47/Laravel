<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
   public function index(){
       return view('welcome');
   }
   public function demo(Request $request){
       $request->validate(
         ['name'=>'required' ,
         'email'=>'required|email',
         'password'=>'required'
         ]
       );
       print_r($request->all());

   }
}
