<?php

namespace App\Http\Controllers;

use App\Order;
use App\Menu;
use App\Post;
use App\Product;
use App\User;
use App\Gallery;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $orders = Order::all();
        $menus = Menu::all();
        $galleries = Gallery::all();

        return view('admin.admin', compact(['products', 'orders', 'menus','galleries']));
    }
    
}
