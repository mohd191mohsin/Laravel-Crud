@extends('layouts.app')
@section('title')
    create Product
@endsection

@section('content')
<section>

    <div class="container mt-5">
        <h1>Create Product</h1>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="Product_name">Product Name:</label>
                <input type="text" class="form-control" id="Product_name" name="Product_name" required>
            </div>
            <div class="form-group mb-3">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" id="brand" name="brand">
            </div>
            <div class="form-group mb-3">
                <label for="category">Category:</label>
                <input type="text" class="form-control" id="category" name="category">
            </div>
            <div class="form-group mb-3">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="price">Price:</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</section>
@endsection
