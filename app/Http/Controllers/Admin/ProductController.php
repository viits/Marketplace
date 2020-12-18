<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Store;


class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->paginate(10);
        return view('admin.products.index', compact('products'));
    }


    public function create()
    {
        $stores = Store::all(['id','name']);
        return view('admin.products.create', compact('stores'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $store = Store::find($data['store']);
        $store->products()->create($data);
        flash('Produto criado com sucesso')->success();
        return redirect()->route('admin.products.index');
    }


    public function show($id)
    {
        return $id;
    }


    public function edit($id)
    {
        $product = $this->product->find($id);
        return view('admin.products.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        $product = $this->product->find($id);
        $product->update($data);
        flash('Produto alterado com sucesso')->success();
        return redirect()->route('admin.products.index');
    }


    public function destroy($id)
    {   
        $product = $this->product->find($id);
        $product->delete();
        flash("Deletado com Sucesso");
        return redirect()->route('admin.products.index');
    }
}
