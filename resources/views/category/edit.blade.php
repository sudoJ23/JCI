@extends('layouts.master')
@section('title')
    Create Delivery Bumdes
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body pt-2">
                    <a href="javascript:;" class="card-title h3 d-block text-darker">
                        Form Edit Delivery Bumdes
                    </a>
                    <form action="{{ route('delivery_bumdes.update', $delivery_bumdes) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Driver Name</label>
                            <input type="text" name="driver_name" class="form-control"
                                value="{{ $delivery_bumdes->driver_name }}">
                            @error('driver_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" value="{{ $delivery_bumdes->phone_number }}">
                            @error('phone_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Car Type</label>
                            <input type="text" name="car_type" class="form-control" value="{{ $delivery_bumdes->car_type }}">
                            @error('car_type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Charge</label>
                            <input type="text" name="charge" class="form-control" value="{{ $delivery_bumdes->charge }}">
                            @error('charge')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Transaction ID</label>
                            <input type="text" name="transaction_id" class="form-control" value="{{ $delivery_bumdes->transaction_id }}">
                            @error('transaction_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Submit</button>
                        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
