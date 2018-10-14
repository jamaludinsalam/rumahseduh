<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Address;
use App\Product;
use App\Order;
use App\User;
use App\Post;
use App\Gallery;
Use Alert;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

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
        $posts = Post::all();
        return view('front.front2.home', compact(['cartItems', 'posts']));
    }

    public function beverages()
    {
        $coffees    = Menu::where('cat_menus_id', 1)->get();
        $teas       = Menu::where('cat_menus_id', 6)->get();
        $others     = Menu::where('cat_menus_id', 3)->get();

        $cartItems = Cart::content();
        return view('front.front2.beverages', compact(['coffees', 'teas', 'others','cartItems']));
    }
    public function foods()
    {
        
        $mains      = Menu::where('cat_menus_id', 4)->get();
        $desserts   = Menu::where('cat_menus_id', 5)->get();

        $cartItems = Cart::content();
        return view('front.front2.foods', compact([
            'appetizers', 'brunchs', 'mains', 'desserts', 'cartItems']));
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        $cartItems = Cart::content();
        return view('front.front2.gallery', compact(['cartItems', 'galleries']));
    }

    public function gallerys($gallery)
    {
        $galleries = Gallery::find($gallery);
        $cartItems = Cart::content();
        return view('front.front2.gallery', compact(['cartItems', 'galleries']));
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

    public function invoice($order)
    {
        $orders=Order::where('id', $order)->get();
        // $users=Order::where('id', $order)->get(['user_id'])->first();
        // // $user=$users->user_id;
        // dd($users);
        // $addresses=Address::where('user_id', $users)->get();
        $cartItems = Cart::content();
        return view('front.front2.invoice', compact(['cartItems', 'orders', 'users', 'addresses']));
    }

    public function myorder()
    {
        $orders=Order::where('user_id', Auth::id())->get();

        // if($type == 'unpaid'){
        //     $orders=Order::where('status', '0')->get();
        // }elseif ($type == 'process'){
        //     $orders=Order::where('status', '1')->get();
        // }else {
        //     $orders=Order::all();
        // }

        // if($type == 'delivered'){
        //     $orders = Order::where('status', '2')->get();
        // }
        
        $cartItems = Cart::content();
        return view('front.front2.myorder', compact(['orders', 'cartItems']));
    }

    public function updateImages(Request $request, $order)
    {
        $orders = Order::find($order);

        $image=$request->file('image');
        
        if($image)
        {
            $imageName=$image->getClientOriginalName();
            $image->move('images/transfer/', $imageName);

            $orders->update([
                'image' => $imageName
            ]);
            
        }

        Alert::success('Photo Uploaded!', 'Success');
        
        return back();
    }

    public function blog(Post $post)
    {
        $posts = Post::latest()->paginate(20);
        $postside = Post::latest()->paginate(5);
        $cartItems = Cart::content();
        return view('front.front2.blog', compact(['posts', 'cartItems', 'postside']));
    }

    public function blogs($post)
    {
        $posts = Post::where('id', $post)->get();
        $cartItems = Cart::content();
        // dd($posts);
        return view('front.front2.blogs', compact(['posts', 'cartItems']));
    }

}
