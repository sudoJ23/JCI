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
                        <th>No</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Unit</th>
                        <th>Status</th>
                        <th>Desc</th>
                        <th>User</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ number_format($product->price, 0, ',', '.'); }}</td>
                            <td>{{ (intval($product->qty_init) + intval($product->qty_in) - intval($product->qty_out)) }}</td>
                            <td>{{ $product->unit }}</td>
                            @if ($product->status == 1)
                                <td><span class="badge badge-success ms-auto">Disetujui</span></td>
                            @elseif ($product->status == 0)
                                <td><span class="badge badge-info ms-auto">Menunggu</span></td>
                            @elseif ($product->status == 2)
                                <td><span class="badge badge-warning ms-auto">Ditolak</span></td>
                            @endif
                            <td>{{ $product->description }}</td>
                            <td>{{ Str::ucfirst($product->user->name) }}</td>
                            @if (auth()->user()->role->name == "bumdes")
                            <td>
                                <a href="{{ route('product.accept', $product->id) }}" class="btn btn-success btn-sm"><i
                                        class="fas fa-check"></i></a>
                                <a href="{{ route('product.reject', $product->id) }}"
                                    onclick="return confirm('Apakah anda yakin ingin menolak produk ini?')"
                                    class="btn btn-danger btn-sm"><i class="fas fa-mark"></i></a>
                            </td>
                            @elseif (auth()->user()->role->name == "farmer")
                            <td>
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info btn-sm"><i
                                        class="fas fa-edit"></i></a>
                                <a href="{{ route('product.destroy', $product->id) }}"
                                    onclick="return confirm('Apakah anda yakin mengahpus data ini?')"
                                    class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
