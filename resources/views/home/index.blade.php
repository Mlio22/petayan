@extends('template/homeMaster')

@section('css')
    @include('home/css')
@endsection

@section('content')
    @include('home/jumbotron')
    @include('home/daftar-beranda')
@endsection