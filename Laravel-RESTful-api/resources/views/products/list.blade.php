@extends('layouts.master')
@extends('layouts.navbar')
@section('content')
    <style>
        .w-5{
            display: none;
        }
        p{
            margin-top: 10px;
        }
    </style>
    <div class="container">
        <div>
            <a href="{{route('products.formCreate')}}" class="btn btn-primary">Add Product</a>
        </div>
        <table class="table table-hover">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">image</th>
                    <th scope="col">title</th>
                    <th scope="col">category</th>
                    <th scope="col">description</th>
                    <th scope="col">price</th>
                    <th scope="col" colspan="2"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $key => $product)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td><img src="{{$product->image}}" alt="" style="width: 100px"></td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td><a href="{{route('products.editForm', $product->id)}}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{route('products.destroy', $product->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </table>
        {{$products->links()}}
    </div>
{{--    <style>--}}
{{--        .col{--}}
{{--            display: flex;--}}
{{--        }--}}
{{--    </style>--}}
{{--    @foreach($products as $product)--}}
{{--        <div class="container">--}}
{{--        <div class="row row-cols-1 row-cols-md-3 g-4">--}}
{{--            <div class="col">--}}
{{--            <div class="card">--}}
{{--                <img src="{{$product->image}}" class="card-img-top" alt="...">--}}
{{--                <div class="card-body">--}}
{{--                    <h4 class="card-title">{{$product->category}}</h4>--}}
{{--                    <h5 class="card-title">{{$product->title}}</h5>--}}
{{--                    <p class="card-text">{{$product->description}}</p>--}}
{{--                    <p class="card-title">{{$product->price}}</p>--}}
{{--                    <a href="#" class="btn btn-primary">Add Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--    @endforeach--}}
@endsection
