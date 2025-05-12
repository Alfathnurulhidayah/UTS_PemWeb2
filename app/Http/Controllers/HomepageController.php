<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;
use App\Models\Product;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $products = Product::all(); // Ambil semua produk
        
        return view('web.homepage',[
            'categories' => $categories,
            'products' => $products, // Kirim produk ke view
            'title'=>'Homepage'
        ]);
    }

    public function products()
    {
        $title = "Products";

        return view('web.products',[
            'title'=>$title
        ]);
    }

    public function product($slug){
        return view('web.product', [
            'slug' => $slug
        ]);
    }

    public function categories()
    {
        return view('web.categories',[
            'title'=>'Categories'
        ]);
    }

    public function category($slug)
    {
        $category = Categories::find($slug);

        return view('web.category_by_slug', [
            'slug' => $slug, 
            'category' => $category
        ]);
    }

    public function cart()
    {
        return view('web.cart',[
            'title'=>'Cart'
        ]);
    }

    public function checkout()
    {
        return view('web.checkout',[
            'title'=>'Checkout'
        ]);
    }
}
