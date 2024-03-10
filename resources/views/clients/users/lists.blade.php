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
                <th>THỜI GIAN</th>
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
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">Không có người dùng</td>
                </tr>
        </tbody>
        @endif
    </table>
    <div class="alert alert-success">{{ session('msg') }}</div>

@endsection
