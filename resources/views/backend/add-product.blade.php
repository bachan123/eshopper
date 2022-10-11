@extends('backend.layouts.app')

@section('title', 'Products')

@section('content')

<div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Product</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Product</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container">
        <form method="post" action="{{ route('add-product')}}" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Product Name</label>
                    <div class="col-md-6">
                        <input type="text" name="product_name" class="form-control">
                        <div class="col-md-6" style="padding: 0px;">
                          
    
                            {{-- @error('title')
      
                            <li class="alert alert-danger mt-1" role="alert">{{$message}}</li>
      
                            @enderror --}}
                          
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="row mt-4">
                    <label class="col-md-3">Product Description</label>
                    <div class="col-md-6">
                        <textarea name="product_description" class="form-control"></textarea>
                        <div class="col-md-6" style="padding: 0px;">
                          
    
                            {{-- @error('description')
      
                            <li class="alert alert-danger mt-1" role="alert">{{$message}}</li>
      
                            @enderror --}}
                          
                        </div>    
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="row mt-4">
                    <label class="col-md-3">Product Size</label>
                    <div class="col-md-6">
                        <input type="text" name="product_size" class="form-control">
                        <div class="col-md-6" style="padding: 0px;">
                          
    
                            {{-- @error('title')
      
                            <li class="alert alert-danger mt-1" role="alert">{{$message}}</li>
      
                            @enderror --}}
                          
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="row mt-4">
                    <label class="col-md-3">Product Category</label>
                    <div class="col-md-6">
                        <input type="text" name="product_category" class="form-control">
                        <div class="col-md-6" style="padding: 0px;">
                          
    
                            {{-- @error('title')
      
                            <li class="alert alert-danger mt-1" role="alert">{{$message}}</li>
      
                            @enderror --}}
                          
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="row mt-4">
                    <label class="col-md-3">Product Image</label>
                    <div class="col-md-6">
                        <input type="file" name="product_image">
                        <div class="col-md-6" style="padding: 0px;">
                          
    
                            {{-- @error('image')
      
                            <li class="alert alert-danger mt-1" role="alert">{{$message}}</li>
      
                            @enderror --}}
                          
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>    
                
                <div class="row mt-4">
                    <label class="col-md-3">Product Price</label>
                    <div class="col-md-6">
                        <input type="text" name="product_price" class="form-control">
                        <div class="col-md-6" style="padding: 0px;">
                          
    
                            {{-- @error('title')
      
                            <li class="alert alert-danger mt-1" role="alert">{{$message}}</li>
      
                            @enderror --}}
                          
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Save">  
            </div>
        </form>
    </div>
</section>

  @endsection