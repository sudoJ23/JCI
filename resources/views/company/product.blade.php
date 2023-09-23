@extends('layouts.master')
@section('title')
    Product
@endsection

@section('content')
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Gula Semut</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>

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
@endsection
