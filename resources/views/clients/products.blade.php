@extends('layouts.client')
@section('title')
    {{$title}}
@endsection
@section('sidebar')
@parent

<h1>Product Sidebar</h1>
@endsection

@section('content')

        <h1>Sản phẩm</h1>
@push('scripts')
<script>
    console.log('lân 2')
</script>
@endpush

@endsection
@section('css')


@endsection

@section('js')
@push('scripts')
<script>
    console.log('pu 1')
</script>
@endpush
@endsection