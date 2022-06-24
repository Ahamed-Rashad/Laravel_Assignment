@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit & Update
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <form method="post" action="{{ route('products.update', $product->id) }}">
                        <div class="form-group">
                            @csrf
                            @method('PATCH')
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $product->name }}"/>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" value="{{ $product->image }}"/>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $procuct->price }}"/>
                        </div>
                        <div class="form-group">
                            <select for="password" name="status" value="{{ $procuct->status }}">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-block btn-danger">Update User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection