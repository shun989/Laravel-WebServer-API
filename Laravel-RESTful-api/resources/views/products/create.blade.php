@extends('layouts.master')
@section('content')
    <div class="container">
        <h2>Create new Product</h2>
    </div>
    <div class="container">
        <form action="{{route('products.create')}}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="text" name="image" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="category" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea type="text" name="description" class="form-control" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary" href="{{route('products.list')}}">Home</a>
        </form>
    </div>
@endsection
