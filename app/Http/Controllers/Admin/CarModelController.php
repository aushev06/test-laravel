<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCarModelRequest;
use App\Models\CarModel;
use App\Services\BrandService;
use App\Services\CarModelService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CarModelController extends Controller
{

    public function __construct(
        private CarModelService $service,
        private BrandService $brandService
    ) {
    }

    public function index()
    {
        return view('admin.car-model.index', [
            'models' => $this->service->findAllWithPaginate(),
        ]);
    }

    public function create()
    {
        return view('admin.car-model.create', [
            'brands' => $this->brandService->getAll()
        ]);
    }

    public function store(SaveCarModelRequest $request)
    {
        try {
            $model = $this->service->save($request, new CarModel());
            return redirect()->route('car-models.show', $model->id);
        } catch (\Throwable $exception) {
            Log::error($exception->getMessage());
            Log::error($exception->getTraceAsString());
            return redirect()->route('car-models.index');
        }
    }

    public function show(CarModel $carModel)
    {
        return view('admin.car-model.show', ['model' => $carModel]);
    }

    public function edit(CarModel $carModel)
    {
        return view('admin.car-model.edit', [
            'model' => $carModel,
            'brands' => $this->brandService->getAll()
        ]);
    }


    public function update(SaveCarModelRequest $request, CarModel $carModel)
    {
        try {
            $carModel = $this->service->save($request, $carModel);
            return redirect()->route('car-models.show', $carModel->id);
        } catch (\Throwable $exception) {
            Log::error($exception->getMessage());
            Log::error($exception->getTraceAsString());
            return redirect()->route('car-models.index');
        }
    }


    public function destroy(CarModel $carModel)
    {
        try {
            $carModel->delete();
            return redirect()->route('car-models.index');
        } catch (\Throwable $exception) {
            Log::error($exception->getMessage());
            Log::error($exception->getTraceAsString());
            return redirect()->route('car-models.index');
        }
    }
}
