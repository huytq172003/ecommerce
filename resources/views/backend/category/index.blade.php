@extends('backend.template.layout')
@section('content')
<table border="1">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Slug</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $cate)
            <tr>
                <td>{{ $cate->id }}</td>
                <td>{{ $cate->name }}</td>
                <td>{{ $cate->slug }}</td>
                <td>
                    <a href="" class="btn btn-danger"><i class="ti ti-edit"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection