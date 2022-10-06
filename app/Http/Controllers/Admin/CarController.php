<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\CarFilter;
use App\Http\Requests\SaveCarModelRequest;
use App\Http\Requests\SaveCarRequest;
use App\Models\Car;
use App\Models\CarModel;
use App\Services\BrandService;
use App\Services\CarModelService;
use App\Services\CarService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CarController extends Controller
{
    public function __construct(
        private CarService $service,
        private CarModelService $carModelService
    ) {
    }

    public function index(CarFilter $carFilter)
    {
        return view('admin.car.index', [
            'cars' => $this->service->findAllWithPaginate($carFilter),
            'models' => $this->carModelService->getAll(),
        ]);
    }

    public function create()
    {
        return view('admin.car.create', [
            'models' => $this->carModelService->getAll()
        ]);
    }

    public function store(SaveCarRequest $request)
    {
        try {
            $model = $this->service->save($request, new Car());
            return redirect()->route('cars.show', $model->id);
        } catch (\Throwable $exception) {
            Log::error($exception->getMessage());
            Log::error($exception->getTraceAsString());
            return redirect()->route('cars.index');
        }
    }

    public function show(Car $car)
    {
        return view('admin.car.show', ['model' => $car]);
    }

    public function edit(Car $car)
    {
        return view('admin.car.edit', [
            'model' => $car,
            'models' => $this->carModelService->getAll()
        ]);
    }


    public function update(SaveCarModelRequest $request, Car $car)
    {
        try {
            $car = $this->service->save($request, $car);
            return redirect()->route('cars.show', $car->id);
        } catch (\Throwable $exception) {
            Log::error($exception->getMessage());
            Log::error($exception->getTraceAsString());
            return redirect()->route('cars.index');
        }
    }


    public function destroy(Car $car)
    {
        try {
            $car->delete();
            return redirect()->route('cars.index');
        } catch (\Throwable $exception) {
            Log::error($exception->getMessage());
            Log::error($exception->getTraceAsString());
            return redirect()->route('cars.index');
        }
    }
}
