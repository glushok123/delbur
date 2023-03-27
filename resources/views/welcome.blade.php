@extends('layouts.app')

@section('content')

<div class="banner">
    <div class="container ">
        <div class='row header-baner-custom'>
            <h1 class=''>ДЕЛОВЫЕ БУРОВИКИ</h1>
        </div>
        <div class='row for-header-baner-custom'>
            <h4>Выбирайте – покупайте - запускайте</h4>
        </div>
    
        <br><br>
        @include('cart.filters')
    </div>
</div>
<br><br>
@include('cart.sort')

<div class='container'>

    @include('cart.index')
    <br>
    <br>
    @include('cart.faq')
    <br>
    <br>
    @include('cart.contact')
</div>

@endsection

@section('after_scripts')
    <script src="{{ asset('js/app-helper.js') }}" defer></script>
    <script src="{{ asset('js/app-custom.js') }}" defer></script>
    <style>
        .banner{
            background-image: url({{ url('/public/uploads', [ 'name' => 'upload_043052bf7cfd55ec34916a7824b1df4c.png'])  }});
            background-position: center;
            
            background-repeat: no-repeat;
            background-color: #f0fed3; 
        }
    </style>
@endsection

@section('description', 'Готовые маркетинговые связки')
@section('keywords', 'Готовые маркетинговые связки')
@section('title', 'Готовые маркетинговые связки')