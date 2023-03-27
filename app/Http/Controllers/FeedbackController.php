<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use DB;

class FeedbackController extends Controller
{

    public function create(Request $request): JsonResponse
    {
        $model = new Feedback();
        $model->name = $request->name;
        $model->phone = $request->phone;
        $model->save();

        return response()->json([
            'status' => 'success',
        ]);
    }
}
