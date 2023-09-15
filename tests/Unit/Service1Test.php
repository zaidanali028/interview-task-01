<?php

use App\Services\Service1;
use Tests\TestCase;


class Service1Test extends TestCase
{
    public function testPerformTask()
    {
        $service = new Service1();
        $result = $service->performTask();

    //  checking if the returned data  from $result is the same as  'Service 1 is working',then the test will pass,or fail otherwise
        $this->assertEquals('Service 1 is working', $result);
    }
}
