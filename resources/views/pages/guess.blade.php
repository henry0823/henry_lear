@extends('layout/style1')
@section('Hello')

@foreach($favorite as $gun)
{{ $gun }}
@endforeach

@stop