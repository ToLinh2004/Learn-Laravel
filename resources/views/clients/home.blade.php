{{-- <h1>Trang chủ Unicode </h1>
<h2>{{$welcome}}</h2>
<h2>{{!empty(request()->keyword)?request()->keyword:"khoong có gì"}}</h2>

<div class="container">
    {!!$content!!};
</div> --}}
{{-- <!-- @for($i =1; $i<=10; $i++)
<p>Phần tử thứ {{$i}}</p>
@endfor -->
<!-- @while($index<=10)
<p>Phần tử thứ {{$index}}</p>
@php $index++;;
 @endphp
@endwhile -->
<!-- @foreach($dataArr as $key =>$item)
<p>Phần tử: {{$item}} -{{$key}}</p>
@endforeach; -->
<!-- @forelse($dataArr as $item)
<p>Phần tư: {{$item}}</p>
@empty
<p>Không có phần tử này</p>
@endforelse; -->

<!-- @if($number>10)
<p>Đây là giá trị hợp lê</p>
@endif -->
 <!-- @if($number<0)
<p>Số âm</p>
@elseif($number>=0  && $number<5)
<p>đây là giá trị bằng 5</p>
@else --}}
{{-- <p>Đây là giá trị nhỏ hơn 10</p> --}}
{{-- @endif;  -->

<!-- @switch($number)
@case(1)
<p>Số thứ nhất</p>
@break
@case(2)
<p>Số còn lại</p>
@break
@default
<p>Số còn lại</p>
@endswitch --> --}}

{{-- <!-- @php $number=10;
$total=$number +20
@endphp
<h3>Kết quả : {{$number}}--{{$total}}</h3> --> --}}

{{-- @for($index=0;$index<10;$index++) 
<p>Phần tử: {{$index}}</p>
@endfor --}}

@extends('layouts.client')
@section('title')
    {{$title}}
@endsection
@section('sidebar')
@parent

<h1>Home Sidebar</h1>
@endsection

@section('content')
        @if(session('msg'))
        <div class="alert alert-{{session('type')}}">
            {{session('msg')}}
        </div>
        @endif
        <h1>Trang chủ</h1>
        @datetime("2021-12-15 15:50:3")
        @env('local')
        <p>environment local</p>
        @elseenv('tesst')
        <p>environment test</p>
      
        @else
        <p>environment </p>
        @endenv
        @include('clients.contents.slide')
        @include('clients.contents.about')
        
        <x-package-alert type="dark" :content="$message" data-icon="facebook"/>
        {{-- <x-button/>
        <x-inputs.Button/>
        <x-forms.Button/> --}}
@endsection
@section('css')


@endsection

@section('js')
<script>

</script>

@endsection

