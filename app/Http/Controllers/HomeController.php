<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Product;
Use Alert;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = Cart::content();
        return view('front.front2.home', compact('cartItems'));
    }

    public function beverages()
    {
        $coffees    = Menu::where('cat_menus_id', 2)->get();
        $teas       = Menu::where('cat_menus_id', 3)->get();
        $others     = Menu::where('cat_menus_id', 8)->get();

        $cartItems = Cart::content();
        return view('front.front2.beverages', compact(['coffees', 'teas', 'others','cartItems']));
    }
    public function foods()
    {
        $appetizers = Menu::where('cat_menus_id', 9)->get();
        $brunchs    = Menu::where('cat_menus_id', 10)->get();
        $mains      = Menu::where('cat_menus_id', 11)->get();
        $desserts   = Menu::where('cat_menus_id', 12)->get();

        $cartItems = Cart::content();
        return view('front.front2.foods', compact([
            'appetizers', 'brunchs', 'mains', 'desserts', 'cartItems']));
    }

    public function gallery()
    {
        $cartItems = Cart::content();
        return view('front.gallery', compact('cartItems'));
    }

    public function about()
    {
        $cartItems = Cart::content();
        return view('front.front2.about', compact('cartItems'));
    }

    public function contact()
    {
        $cartItems = Cart::content();
        return view('front.front2.contact', compact('cartItems'));
    }

    public function shop(Product $product)
    {
        $products = Product::all();
        $prod = Product::find($product);
        $productsview = Product::where('id', $product)->get();

        $chunk = $products->take(1);
        $cartItems = Cart::content();
        
        return view('front.front2.shop', compact(['chunk','products','cartItems','prod']));
    }

    public function shops($product)
    {
        $products = Product::where('id', $product)->get();
        $cartItems = Cart::content();
        // 'products' => App\Product::where('id', $product)->get()
        
        
        return view('front.front2.shops', compact(['products','product','cartItems']));
        
    }

    public function invoice()
    {
        $cartItems = Cart::content();
        return view('front.front2.invoice', compact('cartItems'));
    }
}
