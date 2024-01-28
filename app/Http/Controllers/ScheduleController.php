<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestSchedule;
use App\Services\Schedule\ScheduleService;
use Exception;
use Illuminate\Http\JsonResponse;

class ScheduleController extends Controller
{
    public function makeSchedule(RequestSchedule $request): JsonResponse
    {
        try {
            $scheduleService = new ScheduleService();
            $scheduleData = $scheduleService->makeSchedule($request);

            return sendSuccessResponse('Schedule Set Successfully', 200, $scheduleData);
        }catch (Exception $exception) {
            return sendErrorResponse('Something went wrong' . $exception->getMessage());
        }
    }
}
