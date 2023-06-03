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
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product</h3></div>
                        <div class="card-body">
                            <form action="{{ route('new.product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="name" placeholder="Product Name" />
                                    <label>Product Name</label>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="category_name" placeholder="Category Name" />
                                            <label>Category Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="brand_name" placeholder="Brand Name" />
                                            <label>Brand Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="product_price" placeholder="Product Price" />
                                    <label>Product Price</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                    <label>Description</label>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" name="image" type="file"/>
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
