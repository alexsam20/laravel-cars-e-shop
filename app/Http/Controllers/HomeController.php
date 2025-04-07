<?php

namespace App\Http\Controllers;

use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        // Select All Cars
//        $cars = Car::get();

        // Select Published Cars
//        $cars = Car::where('published_at', "!=", null)->get();

        // Select the first car
//        $car = Car::where('published_at', "!=", null)->first();

//        $car = Car::find(3);

//        $car = Car::where('published_at', "!=", null)
//            ->where('user_id', 1)
//            ->orderBy('published_at', 'desc')
//            ->limit(2)
//            ->get();

//        $carDate = [
//            'maker_id' => 1,
//            'model_id' => 1,
//            'year' => 2024,
//            'price' => 20000,
//            'vin' => 999,
//            'mileage' => 5000,
//            'car_type_id' => 1,
//            'fuel_type_id' => 1,
//            'user_id' => 1,
//            'city_id' => 1,
//            'address' => 'PO BOX 888',
//            'phone' => '5554448800',
//            'description' =>  null,
//            'published_at' => now(),
//        ];

        // Approach 1
//        $car1 = Car::create($carDate);

        // Approach 2
//        $car2 = new Car();
//        $car2->fill($carDate);
//        $car2->save();

        // Approach 3
//        $car3 = new Car($carDate);
//        $car3->save();

//        $car = Car::find(1);
//        $car->price = 100000;
//        $car->save();

//        $carDate = [
//            'maker_id' => 1,
//            'model_id' => 1,
//            'year' => 2024,
//            'price' => 20000,
//            'vin' => 9999,
//            'mileage' => 5000,
//            'car_type_id' => 1,
//            'fuel_type_id' => 1,
//            'user_id' => 1,
//            'city_id' => 1,
//            'address' => 'PO BOX 888',
//            'phone' => '5554448800',
//            'description' =>  null,
//            'published_at' => now(),
//        ];

//        Car::updateOrCreate(
//            ['vin' => '9999', 'price' => 20000],
//            $carDate
//        );

//        Car::where('published_at', null)
//            ->where('user_id', 1)
//            ->update(['published_at' => now()]);

//        $car = Car::find(1); // Second time Error
//        $car->delete();

//        Car::destroy(2, 3);

//        Car::where('published_at', null)
//            ->where('user_id', 1)
//            ->delete();

//        Car::truncate();

        return view('home.index');
    }
}
