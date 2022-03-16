@extends('index')
@section('dato')
<h1>vives en!!!</h1>

@foreach ($CP as $CP)

@if ($CP['id'] == $asentamiento)

{{$CP['asentamiento']}}
<p> codigo postal:{{$CP['codigo']}}. <br>
    asentamiento:{{$CP['asentamiento']}}.<br>
    tipo:{{$CP['tipo']}}. <br>
    municipio:{{$CP['municipio']}}.<br>
    estado:{{$CP['estado']}}.<br>
    ciudad:{{$CP['ciudad']}}.<br>
    </p>

@endif

@endforeach
@endsection
