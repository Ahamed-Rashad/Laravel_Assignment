@extends('layouts.app')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Add Product
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
      <form method="post" action="{{ route('products.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image" class="form-control" />
          </div>
          <div class="form-group">
              <label for="price">Price</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <div class="form-group">
              <label for="status">Status</label>
              <select class="form-select form-select-lg mb-3" name="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
              </select>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Product</button>
      </form>
  </div>
</div>
@endsection