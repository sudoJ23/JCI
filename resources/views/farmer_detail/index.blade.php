@extends('layouts.master')
@section('title')
    Farmer Detail
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('farmer_detail.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add</a>
            <h5 class="mb-0">Data Farmer</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-flush" id="datatable-search">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>user_id</th>
                        <th>Description</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($farmer_detail as $farmer_detail)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $farmer_detail->user_id }}</td>
                            <td>{{ $farmer_detail->description }}</td>
                            <td>{{ $farmer_detail->address }}</td>
                            <td>{{ $farmer_detail->phone_number }}</td>
                            <td>
                                <a href="{{ route('farmer_detail.edit', $farmer_detail->id) }}"
                                    class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('farmer_detail.destroy', $farmer_detail->id) }}"
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
