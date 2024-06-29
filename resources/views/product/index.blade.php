@extends('layouts.app')
@section('title')
    Product list
@endsection

@section('content')
<section>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1 class="text-center">Products</h1>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($products as $product)
                <div class="col">
                    <a href="{{ route('product.show',$product->id) }}" class="text-decoration-none">
                        <div class="card h-100">
                            {{-- <img src="{{ $product->image }}" class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                            <h5 class="card-title">{{ $product->Product_name }}</h5>
                            <p class="card-text">{{ $product->brand }}</p>
                            <p class="card-text">{{ $product->category }}</p>
                            <p class="card-text">{{ $product->price }}</p>
                            <p class="card-text">{{ $product->Product_name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
