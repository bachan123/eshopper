@extends('backend.layouts.app')

@section('title', 'Products')

@section('content')

<div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Products</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Products</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container">
        <div class="card-body">
            <div class="table-responsive">
                <p>
                  <a href="{{ route('products') }}" class="btn btn-primary">Add Product</a>
                </p>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Size</th>
                            <th>Product Category</th>
                            <th>ProductImage</th>
                            <th>Product Price</th>
                            {{-- <th colspan="2" class="text-center">Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($data))
                        @foreach($data as $key => $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->product_description}}</td>
                            <td>{{$product->product_size}}</td>
                            <td>{{$product->product_category}}</td>
                            <td><img src="{{ asset('images/'.$product->product_image )}}" width="70px" height="70px" alt="image"></td>
                            <td>{{$product->product_price}}</td>
                            {{-- <td>
                              <a href="{{ route('admin.newevents.edit' ,$newevent->id) }}" class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                              <form action="{{ route('admin.newevents.destroy' ,$newevent->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                              </form>
                            </td> --}}
                        </tr>
                         @endforeach
                         @else
                         <tr>
                             <td colspan="3">No Product Found<td>
                         </tr>
                         @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection