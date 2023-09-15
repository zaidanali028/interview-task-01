<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## About [Api Task 01]

An Api with 2 routes for testing 3 services dynamically


##[Api Task 01] - Services 

All the api's services can be found in **App\Services** in the root of this project
- *[Service 01] : The method `(performTask)` in this class wil always succeed*
- *[Service 02] : The method `(performTask)` in this class wil always succeed*
- *[Service 03] : The method `(performTask:param - feature_available)` in this class wil sometimes fail or succeed depending on the third-party response given to this MAIN Service*

##[Api Task 01] - Controllers
All the api's controllers can be found in **App\Http\Controllers\ApiController.php** in the root of this project
- *[successRoute] : It handles the request to this endpoint `(/api/v1/success-route)`*
- *[failingRoute] : It handles the request to this endpoint `(/api/v1/failing-route)`*

##[Api Task 01] - Unit Tests
All the api's unit-tests can be found in **tests/Unit** in the root of this project
- *[Service1Test] : Handles  the test for  `[Service 01]` defined in  `(App\Services\Service1.php)`*
- *[Service2Test] : Handles  the test for  `[Service 02]` defined in  `(App\Services\Service2.php)`*
- *[Service3Test] : Handles  the test for  `[Service 03]` defined in  `(App\Services\Service3.php)`*
- *[ApiControllerTest] : Handles  the test for  `ApiController` defined in  `(App\Http\Controllers\ApiController.php)`*
- `run php artisan test` to test all the services and controllers at a goal

