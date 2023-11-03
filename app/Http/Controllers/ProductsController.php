<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Product;
use App\Models\Smartphone;
use App\Models\Smartwatch;
use App\Models\Tablet;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('product.index');
    }

    public function smartphone()
    {
        $items=Product::all()->where('type_id', '=', 1);
        return view('product.smartphones', compact('items'));

    }
    public function phone()
    {
        $items=Product::all()->where('type_id', '=', 2);
        return view('product.phones', compact('items'));
    }
    public function tablet()
    {
        $items=Product::all()->where('type_id', '=', 3);
        return view('product.tablets', compact('items'));
    }
    public function smartwatch()
    {
        $items=Product::all()->where('type_id', '=', 4);
        return view('product.smartwatches', compact('items'));
    }
    public function showSmartphone(Product $product)
    {
        return view('product.showSmartphone', compact('product'));
    }
    public function showPhone(Product $product)
    {
        return view('product.showPhone', compact('product'));
    }
    public function showTablet(Product $product)
    {
        return view('product.showTablet', compact('product'));
    }
    public function  showSmartwatch(Product $product)
    {
        return view('product.showSmartwatch', compact('product'));
    }

}
