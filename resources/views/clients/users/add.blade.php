@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('content')

    <h1>{{ $title }}</h1>
    @if($errors->any())
    <div class="alert alert-danger">Dữ liệu nhập vào không hợp lê</div>
    @endif
<form action="" method="post">
<div class="mb-3">
    <label for="">Họ và tên</label>
    <input type="text" class="form-control" name='fullname' placeholder="họ tên" value="{{old('fullname')}}">
    @error('fullname')
    <span style="color: red">{{$message}}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="">email</label>
    <input type="text" class="form-control" name='email' placeholder="email"value="{{old('email')}}">
    @error('email')
    <span style="color: red">{{$message}}</span>
    @enderror
</div>
<button class="btn btn-secondary" type="submit">Submit</button>
<a href="{{route('users.index')}}" class="btn btn-warning">Quay lại</a>
@csrf
</form>
    <div class="alert alert-success">{{ session('msg') }}</div>

@endsection
