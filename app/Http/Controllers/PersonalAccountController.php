<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonalAccountRequest;
use App\Http\Requests\UpdatePersonalAccountRequest;
use App\Models\PersonalAccount;
use App\Models\Application;
use App\Models\TypeBoreholes;
use App\Models\ConstructionBoreholePipes;
use App\Models\Equipment;
use App\Models\Material;
use Auth;

class PersonalAccountController extends Controller
{
    public $user;

    /**
     * ЛК Пользователя
     */
    public function lkUser()
    {
        $this->validateUser();

        if ($this->user->hasRole('Пользователь') == false) {
            abort(404);
        }

        $filtersTypeBoreholes = TypeBoreholes::get();
        $filtersConstructionBoreholePipes = ConstructionBoreholePipes::get();
        $filtersEquipment = Equipment::get();
        $filtersMaterial = Material::get();

        $applications = Application::where('user_id', $this->user->id)->get();

        return view('lk.user', [
            'applications' => $applications,
            'filtersTypeBoreholes' => $filtersTypeBoreholes,
            'filtersConstructionBoreholePipes' => $filtersConstructionBoreholePipes,
            'filtersEquipment' => $filtersEquipment,
            'filtersMaterial' => $filtersMaterial,
        ]);
    }

    /**
     * ЛК Подрядчик
     */
    public function lkContractor()
    {
        $this->validateUser();

        if ($this->user->hasRole('Подрядчик') == false) {
            abort(404);
        }

        return view('lk.contractor', [
            //
        ]);
    }

    /**
     * Проверка авторизации пользователя
     */
    function validateUser() {
        if (backpack_auth()->check() == false) {
            abort(404);
        }

        $this->user = backpack_auth()->user();
    } 

    function __construct() {
        //
    }
}
