<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;
use Faker\Factory AS Faker;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car = Car::all();
        return view("cars.car",["car"=>$car]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cars.car_create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            "brand" => "required | min: 3 | max: 20",
            "model" => "required | min:3 | max: 20",
            "price" => "required"
        ],
        [
            "brand.required" => "pole :attribute jest wymagane",
            "brand.min" => "pole :attribute musi mieć min :min znaków",
            "brand.max" => "pole :attribute musi mieć max :max znaków",

            "model.required" => "pole :attribute jest wymagane",
            "model.min" => "pole :attribute musi mieć min :min znaków",
            "model.max" => "pole :attribute musi mieć max :max znaków",

            "price.required" => "pole :attribute jest wymagane",
        ]);

        $car = new Car();
        $car ->brand = $request -> input("brand");
        $car ->model = $request -> input("model");
        $car ->price = $request -> input("price");
        $car ->save();

        return view("cars.succes",["car"=> $car]);
    }

    /**
     * Display the specified resource.
     */
    public function show(car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(car $car)
    {
        //
    }
    public function add(){
        $faker = Faker::create("PL_pl");
        $data=[];

        for($i=0;$i<5;$i++){
            $data[] =[
                'brand' => $faker->country(),
                'model' => $faker->realText(),
                'price' => $faker->randomNumber(2)
            ];

        };
        return db::table("cars") -> insert($data);

    }
}
