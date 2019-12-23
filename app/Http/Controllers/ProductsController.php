<?php

namespace App\Http\Controllers;

use App\Product;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::paginate(20);
        return view('products/index', compact('products'));
    }

    public function show(\App\Product $product){
        return view('products.show',compact('product'));
    }

    public function add(){
        return view('products.add');
    }

    public function store(Request $request){

        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = request('image')->store('uploads','public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();

        $p = new Product();

        $p->name = request()->name;
        $p->price = request()->price;
        $p->description = request()->description;
        $p->image = $imagePath;

        $p->save();

        return redirect('/products');
    }
}

