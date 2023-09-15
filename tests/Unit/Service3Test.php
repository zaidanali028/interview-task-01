<?php

use App\Services\Service3;
use Tests\TestCase;

class Service3Test extends TestCase
{
    public function testPerformTask()
    {
        $service = new Service3();
        $result = $service->performTask();
    //  checking if the returned data  from $result is the same as  'Service 3 is working',then the test will pass,or fail otherwise

        $this->assertEquals('Service 3 is working', $result);
    }
}
