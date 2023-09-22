@extends('layouts.master')
@section('title')
    Harvest
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add</a>
            <h5 class="mb-0">Data Product</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-flush" id="datatable-search">
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty Init</th>
                        <th>Qty In</th>
                        <th>Qty Out</th>
                        <th>Unit</th>
                        <th>Status</th>
                        <th>Notes</th>
                        <th>Desc</th>
                        <th>User</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->qty_init }}</td>
                            <td>{{ $product->qty_in }}</td>
                            <td>{{ $product->qty_out }}</td>
                            <td>{{ $product->unit }}</td>
                            <td>{{ $product->status }}</td>
                            <td>{{ $product->notes }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->user_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
