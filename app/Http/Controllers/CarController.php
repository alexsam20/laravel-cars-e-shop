<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        dd($request, request());
        $cars = User::find(1)
            ->cars()
            ->with(['primaryImage', 'maker', 'model'])
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Car $car)
    {
        // URL
        // http://127.0.0.1:8000/car/1?page=1 ***************
        dump($request->path()); // Output: car/1
        dump($request->url()); // Output: http://127.0.0.1:8000/car/1
        dump($request->fullUrl()); // Output: http://127.0.0.1:8000/car/1?page=1
        dump($request->method()); // Output: GET

        if ($request->isMethod('post')) {
            // POST Request Method
        }
        if ($request->isXmlHttpRequest()) {
            // AJAX Request
        }
        if ($request->is('admin/*')) {
            // Request URL matches the pattern admin/
        }
        if ($request->routeIs('admin.*')) {
            // Request URL matches thr pattern admin.*
        }
        if ($request->expectsJson()) {
            // Request except JSON response
        }
        dump($request->fullUrlWithQuery(['sort' => 'price']));
        // Output: http://127.0.0.1:8000/car/1?page=1&sort=price
        dump($request->fullUrlWithoutQuery(['page']));
        // Output: http://127.0.0.1:8000/car/1
        dump($request->host());
        // Output: 127.0.0.1
        dump($request->httpHost());
        // Output: 127.0.0.1:8000
        dump($request->schemeAndHttpHost());
        // Output: http://127.0.0.1:8000
        dump($request->header('Content-Type'));
        // Output: null
        dump($request->bearerToken());
        // Output: null
        dump($request->ip());
        // Output: 127.0.0.1

        return view('car.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }

    public function search()
    {
        $query = Car::select('cars.*')->where('published_at', '<', now())
            ->with(['primaryImage', 'city', 'carType', 'fuelType', 'maker', 'model'])
            ->orderBy('published_at', 'desc');

        $cars = $query->paginate(15);

        return view('car.search', compact('cars'));
    }

    public function watchlist()
    {
        $cars = User::find(4)
            ->favouriteCars()
            ->with(['primaryImage', 'city', 'carType', 'fuelType', 'maker', 'model'])
            ->paginate(15);

        return view('car.watchlist', compact('cars'));
    }
}
