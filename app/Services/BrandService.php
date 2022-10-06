<?php

namespace App\Services;

use App\Models\Brand;
use Illuminate\Foundation\Http\FormRequest;

class BrandService
{
    public function findAllWithPaginate(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Brand::query()->paginate();
    }

    public function findOne($id): Brand
    {
        return Brand::first($id);
    }

    public function save(FormRequest $request, Brand $brand): Brand
    {
        $brand->fill($request->validated());
        $brand->save();

        return $brand;
    }
}
