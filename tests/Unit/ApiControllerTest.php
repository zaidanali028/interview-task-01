<?php

use App\Services\Service1;
use App\Services\Service2;
use App\Services\Service3;
use Tests\TestCase;
use App\Http\Controllers\ApiController;

class ApiControllerTest extends TestCase
{

    public function testSuccessRoute()
    {
        $response = $this->get('/api/v1/success-route');
        $response->assertjson([
            'result1' => 'Service 1 is working',
            'result2' => 'Service 2 is working',
            'result3' => 'Service 3 is working',
        ]);
    }


    public function testFailingRoute()
    {
        $response = $this->get('/api/v1/failing-route');


        $response->assertJson([
            'result1' => 'Service 1 is working',
            'result2' => 'Service 2 is working',
            'result3' => 'Service 3 is currently unavailable'
        ]);
    }
}
