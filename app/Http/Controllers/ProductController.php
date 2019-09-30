<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Manufacturer;

class ProductController extends Controller
{
    function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::all();

       //$products = Product::orderBy('name', 'desc')->paginate(2 );
       return view ('products.index')->with('products', $products );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('products.create_form')->with('manufacturers', Manufacturer::all());
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    
            $this->validate($request,  [
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:1',
            'manufacturer' => 'exists:manufacturers,id'
        ]);
        $image_store = request()->file('image')->store('products_images', 'public');
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->manufacturer_id = $request->manufacturer;
        $product->image = $image_store;
        $product->save();
        return redirect ("product/$product->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product =  Product::find($id);
        return view ('products.show')->with('product', $product );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view ('products.edit_form')->with('product', $product)->with('manufacturers', Manufacturer::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request,  [
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:1',
            'manufacturer' => 'exists:manufacturers,id'
        ]);
        $product =  Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->manufacturer_id = $request->manufacturer;
        $product->save();
        return redirect("product/$product->id");
                        
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message','Dish has been deleted');
      
    }
}
