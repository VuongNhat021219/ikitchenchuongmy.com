@extends('client.master.index')
@section('css')
    
@endsection
@section('content')
    <!-- Slider -->
    @include('client.layouts.slider')

    @include('client.layouts.spnoibat')
    <!-- end bestselling product -->

    @include('client.layouts.dssanpham')

    @include('client.layouts.spbancothethich')
    @include('client.layouts.productNew')
    @include('client.layouts.baiviet')
    <!-- insurance -->
    @include('client.layouts.insurance')

    <!-- about -->
    @include('client.layouts.abouts')

    <!-- contact -->
    @include('client.layouts.contact')
@endsection
 
@section('js')
@endsection
