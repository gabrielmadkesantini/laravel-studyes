<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index(){
        $prods = Products::all();
return view("products.index", ['prods' => $prods]);
    }

    public function add(){
return view('products.add');
    }

    public function view(){

    }

    public function addSave(Request $form){
        $dados = $form->validate([
            'name' => 'required|unique:products|min:3',
            'price'=> 'required|min:0|numeric',
            'quantity'=> 'required|integer|min:0',
        ]);

     Products::create($dados);

     return redirect()->route('products');

    }

}
