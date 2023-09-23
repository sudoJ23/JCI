<?php

namespace App\Http\Controllers;

use App\Models\Delivery_bumdes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DeliveryBumdesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delivery Bumdes';
        $delivery_bumdes = Delivery_bumdes::all();

        return view('delivery_bumdes.index', compact('title', 'delivery_bumdes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Delivery Bumdes';

        return view('delivery_bumdes.create', compact('title'));
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
            'driver_name' => 'required',
            'phone_number' => 'required',
            'car_type' => 'required',
            'charge' => 'required',
            'transaction_id' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Delivery_bumdes::create($request->all());
        return redirect()->route('delivery_bumdes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Delivery Bumdes';
        $delivery_bumdes = Delivery_bumdes::find($id);

        return view('delivery_bumdes.edit', compact('title', 'delivery_bumdes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'driver_name' => 'required',
            'phone_number' => 'required',
            'car_type' => 'required',
            'charge' => 'required',
            'transaction_id' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Delivery_bumdes::find($id)->update($request->all());
        return redirect()->route('delivery_bumdes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
