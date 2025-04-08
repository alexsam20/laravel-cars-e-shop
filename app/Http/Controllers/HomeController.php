<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;

class HomeController extends Controller
{
    public function index()
    {
//        $makers = Maker::factory()->count(10)->create();
//        dd($makers);

//        User::factory()->count(10)->create([
//            'name' => 'Alexandr S Samciuc',
//        ]);

        /*User::factory()
            ->count(10)
            ->state([
                'name' => 'AlexSaM'
            ])
            ->create();*/

//        User::factory()
//            ->count(10)
//            ->sequence(
//                ['name' => 'Piter'],
//                ['name' => 'John'],
//            )
//

//        User::factory()
//            ->count(10)
////            ->unverified()
//            ->trashed()
//            ->create();

//        User::factory()
//            ->afterCreating(function (User $user) {
//                dump($user);
//            })
//            ->create();

//        Maker::factory()
//            ->count(5)
//            ->hasModels(5) // Relations models() Maker Model
//            ->create();

//        Maker::factory()
//            ->count(1)
//            ->hasModels(1, ['name' => 'Test']) // Relations models() Maker Model
//            ->create();

//        User::factory()
//            ->count(1)
//            ->hasCars(1, function (array $attributes, User $user) {
//                return ['phone' => $user->phone];
//            })
//            ->create();

//        Maker::factory()
//            ->count(1)
//            ->hasModels(1, function (array $attributes, Maker $maker) {
//                return [];
//            })
//            ->create();

        Maker::factory()
            ->count(1)
            ->has(Model::factory()->count(3))
            ->create();

        return view('home.index');
    }
}
