@extends('layouts.master')
@section('title')
    Create Product
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body pt-2">
                    <a href="javascript:;" class="card-title h3 d-block text-darker">
                        Form Add Product
                    </a>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Qty Init</label>
                            <input type="text" name="qty_init" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Qty In</label>
                            <input type="text" name="qty_in" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Qty Out</label>
                            <input type="text" name="qty_out" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <input type="text" name="unit" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Notes</label>
                            <textarea name="notes" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Petani</label>
                            <input type="text" name="user_id" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Submit</button>
                        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
