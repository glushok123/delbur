@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row text-center'>
            <h3>Личный кабинет Подрядчика</h3>
            <hr>
        </div>
    </div>

@endsection

@section('after_scripts')
    <script src="{{ asset('js/app-lk-contractor-helper.js') }}" defer></script>
    <script src="{{ asset('js/app-lk-contractor-custom.js') }}" defer></script>
@endsection

@section('description', 'Готовые маркетинговые связки')
@section('keywords', 'Готовые маркетинговые связки')
@section('title', 'Готовые маркетинговые связки')