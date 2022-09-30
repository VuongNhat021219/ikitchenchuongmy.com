@extends('client.master.index')
@section('css')
    <style>
        .abc{
            margin-top: 80px;
        }
    </style>
@endsection
@section('content')
  @include('client.includes.shopping_cart')
  @include('client.layouts.productNew')


  @endsection

@section('js')
@endsection