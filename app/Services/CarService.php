<?php

namespace App\Services;

use App\Http\Filters\CarFilter;
use App\Models\Car;
use Illuminate\Foundation\Http\FormRequest;

class CarService
{
    public function findAllWithPaginate(CarFilter $carFilter): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Car::filter($carFilter)->paginate();
    }

    public function findOne($id): Car
    {
        return Car::first($id);
    }

    public function save(FormRequest $request, Car $car): Car
    {
        $car->fill($request->validated());
        $car->name = '';
        if ($request->file('img')) {
            $car->img = $request->file('img')->store('auto', 'public');
        }

        $car->save();


        return $car;
    }
}
