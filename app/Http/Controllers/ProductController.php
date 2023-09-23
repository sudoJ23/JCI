<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Product';
        $products = Product::all();

        return view('product.index', compact('title', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Product';
        $categories = Category::all();

        return view('product.create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required|numeric',
            'qty' => 'required|numeric',
            'unit' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'price' => $request->price,
            'qty_init' => $request->qty,
            'qty_in' => '0',
            'qty_out' => '0',
            'unit' => $request->unit,
            'status' => 0,
            'notes' => '',
            'description' => $request->description,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function reject(string $id)
    {
        $title = 'Edit product';
        $editedProduct = Product::find($id)->update(['status' => 2]);
        return redirect()->route('product.index');
    }

    public function accept(string $id)
    {
        $title = 'Edit product';
        $editedProduct = Product::find($id)->update(['status' => 1]);
        return redirect()->route('product.index');
    }

    public function edit(string $id)
    {
        $title = 'Edit Product';
        $product = Product::find($id);

        return view('product.edit', compact('title', 'product'));
    }

    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required|numeric',
            'qty_init' => 'required',
            'qty_out' => 'required|numeric',
            'unit' => 'required',
            'status' => 'required',
            'notes' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Product::find($id)->update($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
    }
}
