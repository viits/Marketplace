<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Store;
class StoreController extends Controller
{
    public function index(){
        
        $stores = Store::paginate(10);

        return view('admin.stores.index', compact('stores'));
    }
}
