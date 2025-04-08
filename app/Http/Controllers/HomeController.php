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
//        User::factory()
//            ->count(10)
////            ->unverified()
//            ->trashed()
//            ->create();

        User::factory()
            ->afterCreating(function (User $user) {
                dump($user);
            })
            ->create();

        return view('home.index');
    }
}
