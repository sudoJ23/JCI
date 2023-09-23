@extends('layouts.master')
@section('title')
    Create Farmer
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body pt-2">
                    <a href="javascript:;" class="card-title h3 d-block text-darker">
                        Form Add Farmer
                    </a>
                    <form action="{{ route('farmer_detail.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>User_id</label>
                            <input type="text" name="user_id" class="form-control">
                            @error('user_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control"></textarea>
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone_number" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Submit</button>
                        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
