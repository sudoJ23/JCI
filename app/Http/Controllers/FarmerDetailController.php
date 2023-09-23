<?php

namespace App\Http\Controllers;

use App\Models\FarmerDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FarmerDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Farmer Detail';
        $farmer_detail = FarmerDetail::all();

        return view('farmer_detail.index', compact('title', 'farmer_detail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Farmer';

        return view('farmer_detail.create', compact('title'));
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
            'user_id' => 'required',
            'description' => 'required',
            'address' => 'required',
            'phone_number' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        FarmerDetail::create($request->all());
        return redirect()->route('farmer_detail.index');
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
        $title = 'Edit Farmer';
        $farmer_detail = FarmerDetail::find($id);

        return view('farmer_detail.edit', compact('title', 'farmer_detail'));
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
            'user_id' => 'required',
            'description' => 'required',
            'address' => 'required',
            'phone_number' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        FarmerDetail::find($id)->update($request->all());
        return redirect()->route('farmer_detail.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $farmer_detail = FarmerDetail::find($id);
        $farmer_detail->delete();
    }
}
