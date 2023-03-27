<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use DB;

class ApplicationController extends Controller
{
    public function create(Request $request): JsonResponse
    {
        if (backpack_auth()->check() == false) {
            abort(404);
        }

        $user = backpack_auth()->user();

        if ($user->hasRole('Пользователь') == false) {
            abort(404);
        }
        //dd($request->all());

        $application = new Application();
        $application->user_id = $user->id;
        $application->location = $request->location;
        $application->type_boreholes = $request->type_boreholes;
        $application->construction_borehole_pipes = $request->construction_borehole_pipes;
        $application->equipment = $request->equipment;
        $application->date_start = $request->date_start;
        $application->material = $request->material;
        $application->comment = $request->comment;
        $application->coordinate_x = $request->coordinate_x;
        $application->coordinate_y = $request->coordinate_y;
        $application->acceptable_price = $request->acceptable_price;
        $application->save();

        return response()->json([
            'status' => 'success',
            'idApplication' => $application->id,
        ]);
    }
}
