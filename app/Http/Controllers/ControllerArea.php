<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\area;
class ControllerArea extends Controller
{
    protected $listeners = ['render' => 'render'];

   public function index(){
       $area = area::all();
       return view('area',compact('area'));
   }
}
