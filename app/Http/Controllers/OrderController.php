<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use DB;

class OrderController extends Controller
{
    public function create(Request $request): JsonResponse
    {
        $model = new Order();
        $model->name = $request->name;
        $model->phone = $request->phone;
        $model->bundles_id = $request->bundleId;
        $model->save();

        return response()->json([
            'status' => 'success',
        ]);
    }
}