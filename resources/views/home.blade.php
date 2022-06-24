@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div><br/>
                @endif
                <table class="table">
                    <thead>
                        <tr class="table-warning">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Image</td>
                            <td>Price</td>
                            <td>Status</td>
                            <td class="text-center">Update/Delete</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $products)
                        <tr>
                            <td>{{$products->id}}</td>
                            <td>{{$products->name}}</td>
                            <td>{{$products->image}}</td>
                            <td>{{$products->price}}</td>
                            <td>{{$products->status}}</td>
                            <td class="text-center">
                                <a href="{{ route('products.edit', $products->id)}}" class="btn btn-primary btn-sm">Update</a>
                                <form action="{{ route('products.destory', $products->id)}}" method="post" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection