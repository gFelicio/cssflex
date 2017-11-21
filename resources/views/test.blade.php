@extends('layouts/master')

@section('title')
    FLEX - gFelicio
@endsection

@section('content')
    @include('partials/header')

    <h1 class="intro">
        New values and<br/>
        CSS' Properties
    </h1>

    @include('partials/about')

    @include('partials/products')

    @include('partials/price')

    @include('partials/quality')

    @include('partials/newsletter')

    @include('partials/footer')
@endsection

