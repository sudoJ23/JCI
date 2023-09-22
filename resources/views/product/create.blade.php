@extends('layouts.master')
@section('title')
    Create Product
@endsection

@section('content')
    <div class="card">
        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
            <h2 class="card-title h5 d-block text-darker">Form Add Product</h2>
        </div>

        <div class="card-body pt-2">
            <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">House</span>
            <a href="javascript:;" class="card-title h5 d-block text-darker">
                Shared Coworking
            </a>
            <p class="card-description mb-4">
                Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons.
            </p>
            <div class="author align-items-center">
                <img src="./assets/img/kit/pro/team-2.jpg" alt="..." class="avatar shadow">
                <div class="name ps-3">
                    <span>Mathew Glock</span>
                    <div class="stats">
                        <small>Posted on 28 February</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
