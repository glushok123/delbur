@extends('layouts.app')

@section('content')

    <div class='container'>
        <div id='map'>

        </div>
    </div>

@endsection

@section('after_scripts')
    <script src="{{ asset('js/map/app-helper.js') }}" defer></script>
    <script src="{{ asset('js/map/app-custom.js') }}" defer></script>
    <style type="text/css">

        #map {
            width: 95%;
            height: 500px;
        }
            /* Оформление меню (начало)*/
        .menu {
            list-style: none;
            padding: 5px;

            margin: 0;
        }
        .submenu {
            list-style: none;

            margin: 0 0 0 20px;
            padding: 0;
        }
        .submenu li {
            font-size: 90%;
        }
        a {
            color: #04b; /* Цвет ссылки */
            text-decoration: none; /* Убираем подчеркивание у ссылок */
        }
        a:visited {
            color: #04b; /* Цвет посещённой ссылки */
        }
        a:hover {
            color: #f50000; /* Цвет ссылки при наведении на нее курсора мыши */
        }
            /* Оформление меню (конец)*/
    </style>
@endsection

@section('description', 'Карта скважин')
@section('keywords', 'Карта скважин')
@section('title', 'Карта скважин')