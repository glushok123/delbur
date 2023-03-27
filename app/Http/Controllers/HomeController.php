<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\Home;
use App\Models\Application;
use App\Models\TypeBoreholes;
use App\Models\ConstructionBoreholePipes;
use App\Models\Equipment;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\Paginator;
use DB;

class HomeController extends Controller
{
    public $countProductOnPage = 15;


    /**
     * Главная страница
     */
    public function index()
    {
        Paginator::useBootstrap();

        $applications = Application::get();

        $filtersTypeBoreholes = TypeBoreholes::get();
        $filtersConstructionBoreholePipes = ConstructionBoreholePipes::get();
        $filtersEquipment = Equipment::get();
        $filtersMaterial = Material::get();

        return view('welcome', [
            'applications' => $applications,
            'filtersTypeBoreholes' => $filtersTypeBoreholes,
            'filtersConstructionBoreholePipes' => $filtersConstructionBoreholePipes,
            'filtersEquipment' => $filtersEquipment,
            'filtersMaterial' => $filtersMaterial,
        ]);
    }

    /**
     * Фильтрация и сортировка
     * 
     * @param Request $request
     * 
     * @return JsonResponse
     */
    public function filtersPost(Request $request): JsonResponse
    {
        Paginator::useBootstrap();

        $builder = $this->filters($request);
        //$modelsBundle = $builder->paginate($this->countProductOnPage);
        //$modelsBundle->appends($request->all());
        $applications = $builder->get();

        return response()->json([
            'status' => 'success',
            'applications' => $applications,
            'data' => view('cart.index', [
                'applications' => $applications,
            ])->render()
        ]);
    }

    public function filtersGet(Request $request)
    {
        Paginator::useBootstrap();
        $builder = $this->filters($request);
        $modelsBundle = $builder->paginate($this->countProductOnPage);
        $modelsBundle->appends($request->all());

        $filtersAdvertising = DB::table('advertising_networks')->get();
        $filtersSpheres= DB::table('spheres')->get();

        return view('welcome', [
            'modelsBundle' => $modelsBundle,
            'filtersAdvertising' => $filtersAdvertising,
            'filtersSpheres' => $filtersSpheres,
        ]);
    }

    /**
     * Фильтрация и сортировка (создание запроса)
     * 
     * @param Request $request
     * 
     */
    public function filters(Request $request)
    {
        $builders = Application::select('*');

        if ($request->filtersSort != null) {
            switch ($request->filtersSort) {
                case 'asc-date':
                    $builders = $builders->orderBy('created_at', 'ASC');
                    break;
                case 'desc-date':
                    $builders = $builders->orderBy('created_at', 'DESC');
                    break;
            }
        }

        if ($request->filtersTypeBoreholes != '') {
            $builders = $builders->where('type_boreholes', $request->filtersTypeBoreholes);
        }

        if ($request->filtersConstructionBoreholePipes != '') {
            $builders = $builders->where('construction_borehole_pipes', $request->filtersConstructionBoreholePipes);
        }

        if ($request->filtersEquipment != '') {
            $builders = $builders->where('equipment', $request->filtersEquipment);
        }

        if ($request->filtersMaterial != '') {
            $builders = $builders->where('material', $request->filtersMaterial);
        }

        return $builders;
    }

    /**
     * Пользовательское соглашение
     */
    public function showUserAgreement()
    {
        return view('modules.user_agreement');
    }

    /**
     * Политика конфиденциальности
     */
    public function showPrivacyPolicy()
    {
        return view('modules.privacy_policy');
    }

    /**
     * Оферта
     */
    public function showOffer()
    {
        return view('modules.offer');
    }
}