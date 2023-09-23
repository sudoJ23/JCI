@extends('layouts.master')
@section('title')
    Category
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add</a>
            <h5 class="mb-0">Data Category</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-flush" id="datatable-search">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($category as $category)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('category.edit', $category->id) }}"
                                    class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('category.destroy', $category->id) }}"
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
