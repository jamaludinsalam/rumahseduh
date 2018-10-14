<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\User;


class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = Cart::content();
        return view('front.front2.address', compact('cartItems'));
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
        
        $this->validate($request,[
            'address'   => 'required',
            'receipt'          => 'required',
            'phone'      => 'required',
            

        ]);
        // Auth::user()->address()->create($request->all());
        //Create The Order
        $user = Auth::user();
        $order = $user->orders()->create([
            'total'     => Cart::total(),
            'status'    => 0 ,
            'image'     => "not.jpg",
            'receipt'   => request('receipt'),
            'address'   => request('address'),
            'phone'     => request('phone')
        ]);

        $cartItems = Cart::content();
        foreach ($cartItems as $cartItem)
        {
            $order->orderItems()->attach($cartItem->id,[
                'qty'   => $cartItem->qty,
                'total'=> $cartItem->qty*$cartItem->price
            ]);
            
        }
        

        
        
        
        return redirect()->route('invoice',$order->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }
}
