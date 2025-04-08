<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;

class HomeController extends Controller
{
    public function index()
    {
        User::factory()
            ->count(10)
//            ->sequence(
//                ['name' => 'Piter'],
//                ['name' => 'John'],
//            )
            ->sequence(fn (Sequence $sequence) => ['name' => 'Name ' . $sequence->index])
            ->create();

        return view('home.index');
    }
}
