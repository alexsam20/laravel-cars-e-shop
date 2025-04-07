<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\FuelType;
use App\Models\Maker;

class HomeController extends Controller
{
    public function index()
    {
        // Challenge: Rewrite all Cars records where th price is greater than $20 000
        $cars = Car::where('price', '>', 20000)->get();
        dump($cars);

        // Challenge: Fetch the Maker details where the Maker name is 'Toyota'
        $maker = Maker::where('name', 'Toyota')->first();
        dump($maker);

        // Challenge: Insert a new FuelType with the name 'Hydrogen'
        FuelType::create(['name' => 'Hydrogen']);

        // Challenge: Update the price of the Car with id 1 to $15 000
        Car::where('id', 1)->update(['price' => 15000]);

        // Challenge: Delete all Car records where the year is before 2020
        Car::where('year', '<', 2020)->delete();
        return view('home.index');
    }
}
