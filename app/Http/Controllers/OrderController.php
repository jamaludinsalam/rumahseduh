<?php

namespace App\Http\Controllers;

use DB;
use App\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function Orders($type='')
    {
        // if($type == 'unpaid'){
        //     $orders=Order::where('status', '0')->get();
        // }elseif ($type == 'process'){
        //     $orders=Order::where('status', '1')->get();
        // }else {
        //     $orders=Order::all();
        // }

        if($type == 'unpaid'){
            $orders=Order::where('status', '0')->get();
        }elseif ($type == 'process'){
            $orders=Order::where('status', '1')->get();
        }else {
            $orders=Order::all();
        }

        if($type == 'delivered'){
            $orders = Order::where('status', '2')->get();
        }
        // dd($orders);
        return view('admin.order', compact('orders'));
    }
    
    
    
    
    
    
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($order)
    {
        $orders=Order::where('id', $order)->get();
        $cartItems = Cart::content();
        return view('admin.invoiceadmin', compact(['cartItems', 'orders', 'users', 'addresses']));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order->update([
            'status' => request('status')
        ]);
        return back();
    }
    

    public function updateImages(Request $request, $order)
    {
        $products = Product::find($product);

        $image=$request->file('image');
        $imageName=$image->getClientOriginalName();
        // $image->move('images/transfer', $imageName);
        
        dd($imageName);
        // $order->update([
        //     'image' => $imageName
        // ]);
        return "Success";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
