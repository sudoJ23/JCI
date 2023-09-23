@extends('layouts.master')
@section('title')
    Harvest
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add</a>
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
                        <th>Action</th>
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
                            <td>
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info btn-sm"><i
                                        class="fas fa-edit"></i></a>
                                <a href="{{ route('product.destroy', $product->id) }}" onclick="return confirm('Apakah anda yakin mengahpus data ini?')" class="btn btn-danger btn-sm"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
