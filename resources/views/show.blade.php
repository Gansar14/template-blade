@extends('master')
@section('content')
<h1> {{$post->judul}}</h1>
<h4>{{$post->isi}}</h4>
<h4>{{$post->tanggal_dibuat}}</h4>
<h4>{{$post->tanggal_diperbaharui}}</h4>
@endsection