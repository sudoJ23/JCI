@extends('layouts.master')
@section('title')
    Product
@endsection

@section('content')
    @foreach ($products as $product)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>

                <form action="{{ route('checkout') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Mau Pesan Berapa</label>
                        <input type="text" name="qty" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Checkout</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
