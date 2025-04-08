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
//        $car = Car::find(1);
//        dump($car->features, $car->primaryImage);

//        $car->features->abc = 0;
//        $car->features->save();

//        $car->features->update(['abc'=> 0]);
//        $car->primaryImage->delete();

//        $car = Car::find(11);

        /*$carFeatures = new CarFeatures([
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
        ]);*/

//        $car->features()->save($carFeatures);

//        $car = Car::find(1);

        // Create new image
//        $image = new CarImage(['image_path' => 'me_folder/my_subfolder/myy_file', 'position' => 2]);
//        $car->images()->save($image);

//        $car->images()->create(['image_path' => 'folder/subfolder/file', 'position' => 3]);

        /*$car->images()->saveMany([
            new CarImage(['image_path' => 'folder2/subfolder2/file2', 'position' => 4]),
            new CarImage(['image_path' => 'folder3/subfolder3/file3', 'position' => 5]),
        ]);*/

        /*$car->images()->createMany([
            ['image_path' => 'folder4/subfolder4/file4', 'position' => 6],
            ['image_path' => 'folder5/subfolder5/file5', 'position' => 7],
        ]);*/

//        $car = Car::find(1);
//        dump($car->carType);

//        $carType = CarType::where('name', 'Sedan')->first();
//        dump($carType->cars);
        /**
         *  $cars = Car::whereBelongsTo($carType)->get();
         *  same
         *  $carType->cars
         */

//        $car->car_type_id = $carType->id;
//        $car->save();

//        $car->carType()->associate($carType);
//        $car->save();

//        $car = Car::find(1);
//        dump($car->favouredUsers);

//        $user = User::find(1);
//        dump($user->favouriteCars);

        $user = User::find(1);
//        $user->favouriteCars()->attach([1, 2]); // Add

//        $user->favouriteCars()->sync([3]); // Delete and Add

//        $user->favouriteCars()->detach([1, 2]);
        $user->favouriteCars()->detach();

        return view('home.index');
    }
}
