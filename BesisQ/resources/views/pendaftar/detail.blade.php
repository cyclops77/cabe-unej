@extends('include.mahasiswa')

@section('content-page')

@foreach($pendaftar as $p)
<h1>{{$p->name}}</h1>
<h1>{{$p->point}}</h1>
@endforeach


@stop