<h2>Demo view unicode</h2>
{{-- <h2>
    @foreach ($data as $key=>$item)
        {{ $key }}
    @endforeach
</h2> --}}

<form action="" method='post'>
@csrf
    <input type="text" name='username'>
    <button type='submit'>Submit</button>
</form>