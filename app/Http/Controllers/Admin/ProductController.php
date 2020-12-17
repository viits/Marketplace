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
        //
    }


    public function destroy($id)
    {
        return $id;
    }
}
