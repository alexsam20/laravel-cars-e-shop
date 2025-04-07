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
//
//        dump($car);
        return view('home.index');
    }
}
