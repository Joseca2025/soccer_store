<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
   
    public function index(){
        $productos= Productos::all();
        return view('productos.index',compact('productos'));
    }
}
