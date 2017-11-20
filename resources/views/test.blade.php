@extends('layouts/master')

@section('title')
    FLEX - gFelicio
@endsection

@section('content')
    @include('partials/header')

    <h1 class="introducao">
        Novos valores e<br/>
        Propriedades de CSS
    </h1>

    @include('partials/about')

    @include('partials/products')

    @include('partials/price')

    @include('partials/quality')

    @include('partials/newsletter')

    @include('partials/footer')
@endsection

