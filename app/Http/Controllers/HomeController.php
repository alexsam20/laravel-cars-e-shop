<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\FuelType;
use App\Models\Maker;

class HomeController extends Controller
{
    public function index()
    {
//        $car = Car::find(1);
//        dump($car->features, $car->primaryImage);

//        $car->features->abc = 0;
//        $car->features->save();

//        $car->features->update(['abc'=> 0]);
//        $car->primaryImage->delete();

        $car = Car::find(11);

        $carFeatures = new CarFeatures([
            'abc' => false,
            'air_conditioning' => false,
            'power_windows' => false,
            'power_door_locks' => false,
            'cruise_control' => false,
            'bluetooth_connectivity' => false,
            'remote_start' => false,
            'gps_navigation' => false,
            'heated_seats' => false,
            'climate_control' => false,
            'rear_parking_sensor' => false,
            'leather_seats' => false,
        ]);

        $car->features()->save($carFeatures);


        return view('home.index');
    }
}
