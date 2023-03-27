@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row text-center'>
            <h3>Личный кабинет пользователя</h3>
            <hr>
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#aplication" type="button" role="tab" aria-controls="home" aria-selected="true" data-type='aplication'>Мои заявки</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#offers" type="button" role="tab" aria-controls="profile" aria-selected="false" data-type='offers'>Предложения</button>
            </li>

        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade row active show" id="aplication" role="tabpanel" aria-labelledby="home-tab">
                @include('lk.user.application')
            </div>
            <div class="tab-pane fade row" id="offers" role="tabpanel" aria-labelledby="profile-tab">

            </div>
        </div>
    </div>



    @include('modal.addApplication')

@endsection

@section('after_scripts')
    <script src="{{ asset('js/lk/app-lk-user-helper.js') }}" defer></script>
    <script src="{{ asset('js/lk/app-lk-user-custom.js') }}" defer></script>
    <script src="{{ asset('js/lk/app-api-yandex-map-lk-user-custom.js') }}" defer></script>
@endsection

@section('description', 'Личный кабинет пользователя')
@section('keywords', 'Личный кабинет пользователя')
@section('title', 'Личный кабинет пользователя')