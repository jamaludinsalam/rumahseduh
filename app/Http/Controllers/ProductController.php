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
   
    public function index()
    {
        $products = Product::all();
        $categories = Category::whereIn('id', [7,8])->get();
        $images = ProductImage::where('product_id');
       
        
        return view('admin.products.index', compact(['products', 'categories']));
    }

   
    public function create()
    {
        $products = Product::all();
        $categories = Category::whereIn('id', [7,8])->get();

        return view('admin.products.create', compact(['products', 'categories']));
    }

    
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

        
        Alert::success('Product Added!', 'Success');
        return redirect()->route('product.index');
        
    }


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

    }
   
    
     public function show($product)
    {
        $orders=Order::where('id', $order)->get();
        $cartItems = Cart::content();
        return view('admin.invoice', compact(['cartItems', 'orders', 'users', 'addresses']));
    
    }

   
    public function edit($product)
    {
        $products   = Product::find($product);
        $categories = Category::whereIn('id', [7,8])->get();

        return view('admin.products.edit', compact(['products', 'categories']));
    }

    
    public function update(Request $request, Product $product)
    {
        $formInput = $request->except('image');
        
        $this->validate($request,[
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);


        $image = $request->image;
        
        if($image)
        {
            $filename = $image->getClientOriginalName();
            $image->move('images/product', $filename);
            $formInput['image'] = $filename;
            
        }
        $product->update($formInput,[
            'name' => request('name'),
            'category_id' => request('category_id'),
            'price' => request('price'),
            'description' => request('description'),
            
        ]);
        Alert::success('Product Edited!', 'Success');
        return redirect()->route('product.index');  
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
