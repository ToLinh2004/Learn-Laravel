@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('content')

        <h1>Thêm sản phẩm</h1>
        <form action="" method="post">
            @error('msg')
        <div class="alert alert-danger text-center">
            {{$message}}
        </div>
       @enderror
            <div class="mb-3">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name='product_name' placeholder="Tên sản phẩm.....">
                @error('product_name')
                <span style="color:red;">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Giá sản phẩm</label>
                <input type="text" class="form-control" name='product_price' placeholder="Giá sản phẩm....." value="{{old('product_price')}}">
                @error('product_price')
                <span style="color:red;">{{$message}}</span>
                @enderror
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
@endsection
@section('css')


@endsection

@section('js')
<script>

</script>

@endsection