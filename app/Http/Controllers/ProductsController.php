<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::all();
        $data = [
            'products' => $products
        ];


        return view('product.product-show', $data);
    }

    public function getForm()
    {
        return view('product.product-form');
    }

    public function postForm(Request $request)
    {

        $data = $request->all();

        $chinese_name = '';
        $english_name = '';
        $type = '';
        $size = '';
        $price = '';
        $description = '';
        $img = '';
        $now = Carbon::now();


        if (!empty(array_get($data, 'chinese_name'))) {
            $chinese_name = array_get($data, 'chinese_name');
        }
        if (!empty(array_get($data, 'english_name'))) {
            $english_name = array_get($data, 'english_name');

        }else{ dd($english_name);}

        if (!empty(array_get($data, 'type'))) {
            $type = array_get($data, 'type');
        }
        if (!empty(array_get($data, 'size'))) {
            $size = array_get($data, 'size');
        }
        if (!empty(array_get($data, 'price'))) {
            $price = array_get($data, 'price');
        }
        if (!empty(array_get($data, 'description'))) {
            $description = array_get($data, 'description');
        } else {
            $description = 'no data';
        }
        if (!empty(array_get($data, 'img'))) {
            $img = array_get($data, 'img');
        } else {
            $img = 'no data';
        }
//        dd($request)->all();
        $insertData = [
            'chinese_name' => $chinese_name,
            'english_name' => $english_name,
            'type' => $type,
            'size' => $size,
            'description' => $description,
            'img' => $img,
            'price' => $price,
            'created_at' => $now,
        ];

        DB::table('products')->insert(
            $insertData
        );

        return redirect(route("productList"));

    }

    public function productForm($id)
    {
        $product['data']=DB::table('products')->find($id);

        return view ('product.product-form-update', $product);
    }
    public function updateData(Request $request, $id)
    {


        $now=Carbon::now();
        DB::table('products')
            ->where("id", "=", $id)
            ->update([
               'chinese_name'=>$request->input("chinese_name"),
                'english_name'=>$request->input("chinese_name"),
                'type'=>$request->input("type"),
                'size'=>$request->input("size"),
                'price'=>$request->input("price"),
                'description'=>$request->input("description"),
                'updated_at'=>$now
            ]);

        return redirect(route('productList'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $products = product::destroy($id);

        return redirect(route('productList'));
    }
}
