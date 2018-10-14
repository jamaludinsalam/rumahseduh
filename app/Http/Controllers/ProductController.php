<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use App\Category;
Use Alert;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;




class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::whereIn('id', [1,2,3,4,5])->get();
        $images = ProductImage::where('product_id');
       
        
        return view('admin.products.index', compact(['products', 'categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $categories = Category::whereIn('id', [1,2,3,4,5])->get();

        return view('admin.products.create', compact(['products', 'categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $post= Product::create([
            'name' => request('name'),
            'category_id' => request('category_id'),
            'price' => request('price'),
            'description' => request('description'),
            'image' => "img.jpg"
        ]);

        if($post){
            alert()->success('Post Created', 'Successfully');
            return redirect()->route('product.index');
        }

        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    
    
    
    
    public function uploadImages(Product $product , Request $request)
    {
        $products = Product::find($product);

        $image=$request->file('file');

        if($image)
        {
            $imageName=$image->getClientOriginalName();
            $image->move('images', $imageName);

            $imagePath= ("images/$imageName");
            $product->images()->create(['image_path'=>$imagePath]);
        }

        return "Success";
    }
    
    public function destroyImages($product)
    {
        $file = Product::find($product);
        $files= $file->images;
        dd($filename[0]->image_path);



    //    $filename = $request->id;
    //    $uploaded_image = ProductImage::where('id')
        // $filename = Product::find($product);
        // $image=$request->file('file');
        // $uploaded_image = ProductImage::where('product_id', basename($filename))->first();
 
        // if (empty($uploaded_image)) {
        //     return Response::json(['message' => 'Sorry file does not exist'], 400);
        // }
 
        // $file_path = ("$uploaded_image");
        
        // if (file_exists($file_path)) {
        //     unlink($file_path);
        // }
 
        // if (file_exists($resized_file)) {
        //     unlink($resized_file);
        // }
 
        // if (!empty($uploaded_image)) {
        //     $uploaded_image->delete();
        // }
 
        // return Response::json(['message' => 'File successfully delete'], 200);
        

        // return "image hass been removed";
    }
    // public function invoice($order)
    // {
    //     $orders=Order::where('id', $order)->get();
    //     // $users=Order::where('id', $order)->get(['user_id'])->first();
    //     // // $user=$users->user_id;
    //     // dd($users);
    //     // $addresses=Address::where('user_id', $users)->get();
    //     $cartItems = Cart::content();
    //     return view('front.front2.invoice', compact(['cartItems', 'orders', 'users', 'addresses']));
    // }
    
     public function show($product)
    {
        $orders=Order::where('id', $order)->get();
        $cartItems = Cart::content();
        return view('admin.invoice', compact(['cartItems', 'orders', 'users', 'addresses']));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        // $file = Product::where('id', $product)->get();
        $file = ProductImage::find($product);
        $files= $file->image_path;
        // $imagepath = $file->image_path;
        // dd($files);
        // ProductImage::delete($files);
        if($file){
            return $file->delete($files);
        }
        // if(ProductImage::exists($files)){
        //     ProductImage::delete($files);
        // }
        return "deleted";
        
    }

    public function delete(Product $product)
    {
        $product->delete();
        Alert::success('Product Deleted!', 'Success');
        return redirect()->route('product.index');
    }
}
