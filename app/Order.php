<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class Order extends Model
{
    protected $fillable=['total', 'status', 'image', 'receipt', 'address', 'phone'];

    public function orderItems()
    {
        return $this->belongsToMany(Product::class)->withPivot('qty','total');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public static function createOrder()
    {
        
        $user = Auth::user();
        $order = $user->orders()->create([
            'total'     => Cart::total(),
            'status'    => 0 ,
            'image'     => "not.jpg"
        ]);

        $cartItems = Cart::content();
        foreach ($cartItems as $cartItem)
        {
            $order->orderItems()->attach($cartItem->id,[
                'qty'   => $cartItem->qty,
                'total'=> $cartItem->qty*$cartItem->price
            ]);
            
        }
    }
}
