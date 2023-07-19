@extends('backend.template.layout')
@section('content')
<form class="">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="quantity" name="quantity">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Category</label>
        <select name="" id="" class="form-select">
            @foreach ($categories as $cate)
                <option value="{{$cate->id}}">
                    {{$cate->name}}
                </option>
            @endforeach
            
        </select>
    </div>
    
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Lưu thông tin</label>
    </div>
    <button type="submit" class="btn btn-primary">Thêm mới</button>
  </form>
@endsection