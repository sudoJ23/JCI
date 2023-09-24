<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('company.product', compact('products'));
    }

    public function createTransaction(Request $request)
    {
        $product = Product::find($request->product_id);
        $request->request->add(['buyer_id' => auth()->user()->id, 'product_id' => $request->product_id, 'total' => $request->qty * $request->price, 'status' => 'Unpaid']);
        $transaction = Transaction::create($request->all());
        return redirect()->action([ChatController::class, 'createChat'], ['id' => Str::uuid(), 'senderID' => auth()->user()->id, 'receiverID' => $product->user->id, 'transID' => $transaction->id]);
    }

    public function checkout(Request $request)
    {
        // $request->request->add(['buyer_id' => auth()->user()->id, 'product_id' => $request->product_id, 'total' => $request->qty * $request->price, 'status' => 'Unpaid']);
        // $transaction = Transaction::create($request->all());

        $transaction = Transaction::find(intval($request->transactionID));

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $transaction->id,
                'gross_amount' => $transaction->total,
            ),
            'customer_details' => array(
                'buyer_id' => auth()->user()->id
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('company.checkout', compact('snapToken', 'transaction'));
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $transaction = Transaction::find($request->order_id);
                $transaction->update(['status' => 'Paid']);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
