@extends('.backend.template.layout')
@section('content')
    <h2 class="text-center mt-md-3">{{ $title }}</h2>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <form action="{{ route('addCategory') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Tên danh mục</label>
            <input type="text" class="form-control" name="name">
        </div>
        <button type="submit" class="btn btn-primary mb-md-3">Thêm mới</button>
    </form>
@endsection
