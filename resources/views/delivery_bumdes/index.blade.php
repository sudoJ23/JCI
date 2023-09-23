@extends('layouts.master')
@section('title')
    Delivery Bumdes
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('delivery_bumdes.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add</a>
            <h5 class="mb-0">Data Delivery Bumdes</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-flush" id="datatable-search">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Driver Name</th>
                        <th>Phone Number</th>
                        <th>Car Type</th>
                        <th>Charge</th>
                        <th>Transaction ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($delivery_bumdes as $delivery_bumdes)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $delivery_bumdes->driver_name }}</td>
                            <td>{{ $delivery_bumdes->phone_number }}</td>
                            <td>{{ $delivery_bumdes->car_type }}</td>
                            <td>{{ $delivery_bumdes->charge }}</td>
                            <td>{{ $delivery_bumdes->transaction_id }}</td>
                            <td>
                                <a href="{{ route('delivery_bumdes.edit', $delivery_bumdes->id) }}"
                                    class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('delivery_bumdes.destroy', $delivery_bumdes->id) }}"
                                    onclick="return confirm('Apakah anda yakin mengahpus data ini?')"
                                    class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
