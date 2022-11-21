<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PriorityController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        return response()->json(Priority::all());
    }
}
