@extends('layouts.app')
@section('title')
    Product
@endsection

@section('content')
<section>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1 class="text-center">Product</h1>
    <div class="container">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">{{ $product->Product_name }}</h5>
                <p class="card-text">{{ $product->brand }}</p>
                <p class="card-text">{{ $product->category }}</p>
                <p class="card-text">{{ $product->price }}</p>
                <p class="card-text">{{ $product->Product_name }}</p>
                <div class="action d-flex">
                    <a href="{{ route('product.edit',$product->id) }}" class="btn me-3 btn-warning">Edit</a>
                    <form action="{{ route('product.destroy',$product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="confirm('Are you sure');" class="btn btn-danger"  >Delete</button>
                    </form>
                </div>
            </div>
            </div>
    </div>
    </div>
</section>
@endsection
