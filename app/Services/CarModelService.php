<?php

namespace App\Services;

use App\Models\CarModel;
use Illuminate\Foundation\Http\FormRequest;

class CarModelService
{
    public function findAllWithPaginate(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return CarModel::query()->paginate();
    }

    public function findOne($id): CarModel
    {
        return CarModel::first($id);
    }

    public function save(FormRequest $request, CarModel $carModel): CarModel
    {
        $carModel->fill($request->validated());
        $carModel->save();

        return $carModel;
    }

    public function getAll()
    {
        return CarModel::query()->get();
    }
}
