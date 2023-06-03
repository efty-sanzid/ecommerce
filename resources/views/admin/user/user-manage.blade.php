@extends('admin.master')
@section('title')
    Manage User
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
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($users as $user)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>

                                <td class="d-flex mx-1">
                                    <a href="{{ route('user.edit',['id'=>$user->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('delete.product') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
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



