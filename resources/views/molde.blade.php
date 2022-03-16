@extends('index')
@section('tabla')
<table class="default">

    <tr>

    <th>id</td>

    <th>codigo postal</td>

    <th>asentamiento</td>

    <th>tipo de asentamiento</td>

    <th>municipio</td>

    <th>estado</td>

    <th>ciudad</td>
    </tr>
    @foreach ($CP as $CP)
    @if ($CP['codigo'] == $codigo)


        <tr>

          <td>{{$CP['id']}}</td>

          <td>{{$CP['codigo']}}</td>

          <td>{{$CP['asentamiento']}}</td>

          <td>{{$CP['tipo']}}</td>

          <td>{{$CP['municipio']}}</td>

          <td>{{$CP['estado']}}</td>

          <td>{{$CP['ciudad']}}</td>



        </tr>
    @endif
@endforeach
</table>

@endsection
