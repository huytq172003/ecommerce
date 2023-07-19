@extends('backend.template.layout')
@section('add')
<a href="{{ route('add_product') }}" class="btn btn-primary mb-4">Thêm mới sản phẩm</a>
@endsection
@section('content')
   
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Quantity</th>
            <th scope="col">Category</th>
            <th scope="col">Discount</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td scope="row">{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->discount }}</td>
                <td>
                    <a href="" class="btn btn-primary mx-1"><i class="ti ti-edit"></i></a>
                    <a href="" class="btn btn-danger"><i class="ti ti-eraser"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection