<?php

use App\Services\Service2;
use Tests\TestCase;

class Service2Test extends TestCase
{
    public function testPerformTask()
    {
        $service = new Service2();
        $result = $service->performTask();

    //  checking if the returned data  from $result is the same as  'Service 2 is working',then the test will pass or fail otherwise

        $this->assertEquals('Service 2 is working', $result);
    }
}
