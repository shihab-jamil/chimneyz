<?php

namespace App\Services\Schedule;

use App\Http\Requests\RequestSchedule;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleService
{
    public function makeSchedule(RequestSchedule $request)
    {
        $location = $request->input('location');
        $takenService = $request->input('service');
        $quantity = $request->input('quantity');
        $services = [
            [
                'value' => "Chimney Inspection",
                'price' => 69
            ],
            [
                'value' => "Chimney Sweep & Inspection",
                'price' => 299
            ],
            [
                'value' => "Gas Fireplace Repair and Service",
                'price' => 49
            ],
            [
                'value' => "Gas Fireplace Cleaning",
                'price' => 299
            ],
            [
                'value' => "Repair and Construction of Masonry",
                'price' => 49
            ],
            [
                'value' => "Outdoor Fireplace Building",
                'price' => 49
            ],
            [
                'value' => "Other Construction",
                'price' => 49
            ],
        ];

        if ($location == 'Seattle/Tacoma') {
            $cost = $this->calculationCost($services, $takenService, $quantity);
        }

        $schedule = Schedule::create([
            'location'          => $location,
            'service_type'      => $takenService,
            'service_quantity'  => $quantity,
            'service_cost'      => $cost ?? '',
            'name'              => $request->name,
            'email'             => $request->email,
            'phone_number'      => $request->phoneNumber,
            'address'           => $request->address,
            'message'           => $request->message
        ]);

        return $schedule;

    }

    private function calculationCost($services, $takenService, $quantity): float|int
    {
        $totalCost = 0;

        foreach ($services as $service) {
            if ($service['value'] === $takenService) {
                $totalCost = $quantity * $service['price'];
            }
        }

        return $totalCost;
    }
}
