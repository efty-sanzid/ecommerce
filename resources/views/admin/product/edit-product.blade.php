@extends('admin.master')
@section('title')
    Add Product
@endsection
@section('content')

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Product</h3></div>
                        <div class="card-body">
                            <form action="{{ route('update.product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="name" value="{{ $product->name }}" />
                                    <label>Product Name</label>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="category_name" value="{{ $product->category_name }}" />
                                            <label>Category Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="brand_name" value="{{ $product->brand_name }}" />
                                            <label>Brand Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="product_price" value="{{ $product->product_price }}" />
                                    <label>Product Price</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $product->description }}</textarea>
                                    <label>Description</label>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" name="image" type="file"/>
                                    <img src="{{ asset($product->image) }}" alt="" class="img-fluid" width="100" height="100">
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

