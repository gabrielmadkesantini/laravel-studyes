<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ProductsController extends Controller
{
    public function index(){
        $prods = Products::all();
return view("products.index", ['prods' => $prods]);
    }

    public function add(){
return view('products.add');
    }

    public function view(Products $product){
return view('products.view', ['prods' => $product]);
    }

    public function addSave(Request $form){
        $dados = $form->validate([
            'name' => 'required|unique:products|min:3',
            'price'=> 'required|gte:0|numeric',
            'quantity'=> 'required|integer|gte:0',
        ]);

     Products::create($dados);

     return redirect()->route('products')->with('adicionado', "Adicionado com sucesso!!");

    }

    public function edit(Products $products){
return view('products.edit', ['prod'=>$products]);
    }

    public function editedSave(Request $form, Products $products){
  $data = $form->validate([
    'name' => ['required',Rule::unique('products')->ignore($products->id),'min:3'],
    'price'=> 'required|gte:0|numeric',
    'quantity'=> 'required|integer|gte:0',
]);

$products->fill($data);
$products->save();

return redirect()->route('products')->with('sucesso', 'Produto inserido, só sucesso!!');

    }

    public function deleteProducts(Products $products){
        if(request()->isMethod('GET')){
            return view("products.products_delete_alert", ["prod" => $products]);
        }else{
            $products->delete();
            return redirect()->route('products')->with('sucesso', 'Produto apagado com sucesso');

        }
    }

}
