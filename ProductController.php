<?php

namespace App\Http\Controllers;

use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;

class ProductController extends Controller
{
    
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listProduct = Product::all();

        //foreach ($listProduct as $value){
        //    echo $value -> name."<br>";
        //
        return view('index', ['listProduct'=>$listProduct]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view("product.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        //dd($request->all());
        //lay du lieu tu input tu phia client day len server
        $data = $request->all();
        //khoi tao model
        $productModel = new Product;
        //gan gia tri cho model
        $productModel->name = $data["name"];
        $productModel->price = $data["price"];
        $productModel->image = $data["image"];
        $productModel->description = $data["description"];
        $productModel->rate = $data["rate"];
        $productModel->created_by = 1;
        $productModel->updated_by = 1;
        
        //luu model vao database
        if ($productModel->save()){
        return view("product.success",["id" => $productModel->id]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$product = Product::findOrFail($id);
        Product::withTrashed()->find($id)->restore();
        $product = Product::findOrFail($id);
        return view("product.update",["product" => $product]);

    }
    public function delete ($id)
    {
        $product = Product::find($id);
        if($product->delete()){
            echo "Xóa recordc có id: ".$id." thành công!";
        } else {
            echo "Xóa dữ liệu thất bại!";
        }
    }  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
       // dd($data);
        //lay gia tri id
        $id = $data["id"];
        //tim kiem record theo id
        $product = Product::find($id);
        //gan gia tri
        $product->name = $data["name"];
        $product->price = $data["price"];
        $product->image = $data["image"];
        $product->description = $data["description"];
        $product->rate = $data["rate"];
        $product->created_by = 1;
        $product->updated_by = 1;
        //update data vào database
        if ($product->save()){
            return view("product.update_success",["id" => $product->id]);
            }

    }

     
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
