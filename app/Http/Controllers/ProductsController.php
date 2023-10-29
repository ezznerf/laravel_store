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
        $items=Product::all();
        return view('product.smartphones', compact('items'));

    }
    public function phone()
    {
        $items=Phone::all();
        return view('product.phones', compact('items'));
    }
    public function tablet()
    {
        $items=Tablet::all();
        return view('product.tablets', compact('items'));
    }
    public function smartwatch()
    {
        $items=Smartwatch::all();
        return view('product.smartwatches', compact('items'));
    }
    public function showSmartphone(Product $product)
    {
        return view('product.showSmartphone', compact('product'));
    }
    public function showPhone(Phone $phone)
    {
        return view('product.showPhone', compact('phone'));
    }
    public function showTablet(Tablet $tablet)
    {
        return view('product.showTablet', compact('tablet'));
    }
    public function  showSmartwatch(Smartwatch $smartwatch)
    {
        return view('product.showSmartwatch', compact('smartwatch'));
    }

}
