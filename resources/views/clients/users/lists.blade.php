@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('content')

    <h1>{{ $title }}</h1>
    <a href="{{route('users.add')}}" class="btn btn-primary">Thêm người dùng</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width='5%'>STT</th>
                <th>TÊN</th>
                <th>EMAIL</th>
                <th width='15%'>THỜI GIAN</th>
                <th width='5%'>Sửa</th>
                <th width='5%'>Xóa</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($usersList))
                @foreach ($usersList as $index => $item)
                    <tr>
                        <td>
                            {{ $index + 1 }}
                        </td>
                        <td>{{ $item->fullname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->ceate_at }}</td>
                        <td><a href="{{route('users.edit',['id'=>$item->id])}}" class="btn btn-warning btn-sm">Sửa</a></td>
                        <td><a onclick="return confirm('chắc chắc muốn xóa không?')" href="{{route('users.delete',['id'=>$item->id])}}" class="btn btn-danger btn-sm">Xoa</a></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6">Không có người dùng</td>
                </tr>
        </tbody>
        @endif
    </table>
    <div class="alert alert-success">{{ session('msg') }}</div>

@endsection
