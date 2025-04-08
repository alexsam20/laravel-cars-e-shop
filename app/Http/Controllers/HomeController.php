<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
//        $makers = Maker::factory()->count(10)->create();
//        dd($makers);

//        User::factory()->count(10)->create([
//            'name' => 'Alexandr S Samciuc',
//        ]);

        User::factory()
            ->count(10)
            ->state([
                'name' => 'AlexSaM'
            ])
            ->create();

        return view('home.index');
    }
}
