@extends('client.master.index')
@section('css')
    <style>
        .abc{
            margin-top: 40px;
        }
    </style>
@endsection
@section('content')
   
    @include('client.layouts.spnoibat')
    <!-- end bestselling product -->

    @include('client.layouts.dssanpham')


    @include('client.layouts.spbancothethich')
    @include('client.layouts.productNew')
    @include('client.layouts.baiviet')
   
@endsection

@section('js')
@endsection
