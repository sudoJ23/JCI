@extends('layouts.master')
@section('title')
    Product
@endsection

@section('content')
    @foreach ($products as $product)
    @if ((intval($product->qty_init) + intval($product->qty_in) - intval($product->qty_out)) > 0)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>

                <form action="{{ route('transaction.create') }}" method="POST">
                    @csrf
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="form-group">
                        <label>Mau Pesan Berapa</label>
                        <input type="text" name="qty" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Checkout</button>
                </form>
            </div>
        </div>
    @endif
    @endforeach
@endsection
