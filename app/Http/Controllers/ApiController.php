<?php

namespace App\Http\Controllers;


use App\Services\Service1;
use App\Services\Service2;
use App\Services\Service3;

class ApiController extends Controller
{
    public function successRoute(Service1 $service1, Service2 $service2, Service3 $service3)
    {
        $result1 = $service1->performTask();
        $result2 = $service2->performTask();
        $result3 = $service3->performTask();

        return response()->json([
            'result1' => $result1,
            'result2' => $result2,
            'result3' => $result3,
        ],200);
    }

    public function failingRoute(Service1 $service1, Service2 $service2, Service3 $service3)
    {
        $result1 = $service1->performTask();
        $result2 = $service2->performTask();
        $result3 = $service3->performTask(false);

        return response()->json([
            'result1' => $result1,
            'result2' => $result2,
            'result3' => $result3,

        ],503);
    }

}
