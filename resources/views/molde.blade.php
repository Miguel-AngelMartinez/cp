@extends('index')
@section('tabla')
<form action="{{route('index3')}}" method="post">
    @csrf
    <select name="asentamiento">
    @foreach ($CP as $CP)

    @if ($CP['codigo'] == $codigo)

            <option value="{{$CP['id']}}">{{$CP['asentamiento']}}</option>


    @endif

@endforeach
</select>
<input type="submit" value="buscar">

</form>


@endsection
