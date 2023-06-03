@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('content')

    <main>
        <div class="container-fluid px-4 mt-2">

            <div class="card mb-4">
                <div class="card-body">
                    <a class="btn btn-success" href="{{route('add.product')}}">Add Product</a>
                    <h3>{{session('message')}}</h3>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Manage Product
                </div>
                <div class="card-body text-center">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($products as $product)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->brand_name}}</td>
                            <td>{{$product->product_price}}</td>
                            <td>{{substr($product->description,0,25)}}</td>
                            <td>
                                <img src="{{asset($product->image)}}" alt="" class="img-fluid" width="100" height="100">
                            </td>
                            <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td class="d-flex mx-1">
                                <a href="{{ route('edit.product',['id'=>$product->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                @if($product->status == 1)
                                    <a href="{{ route('status',['id'=> $product->id]) }}" class="btn btn-warning btn-sm mx-1">Unpublished</a>
                                @else
                                    <a href="{{ route('status',['id'=> $product->id]) }}" class="btn btn-success btn-sm mx-1">Published</a>
                                @endif
                                <form action="{{ route('delete.product') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection


