@extends('layouts.master')
@section('content')
    <h2>Update Product</h2>
<div class="container">
    <form action="{{route('products.update')}}" method="post">
        @method('PUT')
        @csrf
        <input type="hidden" name="id" value="{{$oldProduct->id}}">
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="text" name="image" class="form-control" value="{{$oldProduct->image}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{$oldProduct->title}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="category" class="form-control" value="{{$oldProduct->category}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea type="text" name="description" class="form-control" rows="5" >{{$oldProduct->description}}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" value="{{$oldProduct->price}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
