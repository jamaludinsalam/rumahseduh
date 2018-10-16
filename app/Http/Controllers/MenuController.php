<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Category;
use App\catMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::whereIn('id', [1,6,3,4,5])->get();
        $coffees    = Menu::where('cat_menus_id', 1)->get();
        $manualbrews       = Menu::where('cat_menus_id', 6)->get();
        $others     = Menu::where('cat_menus_id', 3)->get();
        
        $mains      = Menu::where('cat_menus_id', 4)->get();
        $desserts   = Menu::where('cat_menus_id', 5)->get();
        return view('admin.menuadmin', compact([
            'categories', 'coffees', 'manualbrews', 'others',  'mains', 'desserts'
            ]));
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
        $this->validate(request(), [
            'name'          => 'required',
            'category_id'   =>  'required',
            'price'         =>  'required',
            'description'   => 'required'
        ]);

        Menu::create([
            'name'          =>  request('name'),
            'cat_menus_id'  =>  request('category_id'),
            'price'         =>  request('price'),
            'description'   =>  request('description')
        ]);

        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
