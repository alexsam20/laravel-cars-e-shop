<?php

namespace App\Http\Controllers;

use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
//        return redirect('/car/create');
//        return redirect()->route('car.show', ['car' => 1]);
//        return redirect()->route('car.show', Car::first());
//        return redirect()->away('https://google.com');

        $cars = Car::where('published_at', '<', now())
            ->with(['primaryImage', 'city', 'carType', 'fuelType', 'maker', 'model'])
            ->orderBy('published_at', 'desc')
            ->limit(30)
            ->get();

        return view('home.index', compact('cars'));
    }
}
