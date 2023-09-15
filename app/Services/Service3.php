<?php
// Service 3
namespace App\Services;

class Service3
{
    // All methods that make up service 3

    public function performTask($feature_available = true)
    {
        // logic for checking if service 3 is available and if its not,
        // $feature_available will be false
        if ($feature_available == false) {
            // throw new \Exception('Service 3 has failed');
            return 'Service 3 is currently unavailable';
        }
        return 'Service 3 is working';
    }
}
