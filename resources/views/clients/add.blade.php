@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('content')

        <h1>Thêm sản phẩm</h1>
        <form action="" method="post">
            <input type="text" name='userName'>
            @csrf
            @method('put')
            <button type="submit"></button>
        </form>
@endsection
@section('css')


@endsection

@section('js')
<script>

</script>

@endsection