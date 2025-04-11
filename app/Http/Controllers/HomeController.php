<?php

namespace App\Http\Controllers;

use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
//        return Car::get();
//        return Car::first();
        /*return response('Hello World', 200)
            ->header('X-Developer', 'AlexSam')
            ->header('X-Developer-Date', '2025-04-04 - '.date('Y-m-d'));
            ;*/
//        return response()->json([1,2]);
        /*return response()->view('view', [], 200)
            ->withHeaders(['X-Developer' => 'AlexSam']);*/

        $cars = Car::where('published_at', '<', now())
            ->with(['primaryImage', 'city', 'carType', 'fuelType', 'maker', 'model'])
            ->orderBy('published_at', 'desc')
            ->limit(30)
            ->get();

        return view('home.index', compact('cars'));
    }
}
