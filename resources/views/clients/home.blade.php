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
<p>Đây là giá trị nhỏ hơn 10</p>
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

@extends('layouts.client');
@section('content')
<h1>TRANG CHỦ</h1>
@endsection

@section('sidebar')
@parent
<h3>Home Siderbar</h3>
@endsection

@section('css')
header{
    background:blue;
    color:afff;
}
@endsection

@section('js')
header{
    document.querySelector('.show').onclick=function(){
        alert{'Thành công'}
;    }
}
@section