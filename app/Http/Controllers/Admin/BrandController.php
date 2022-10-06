<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveBrandRequest;
use App\Models\Brand;
use App\Services\BrandService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BrandController extends Controller
{
    public function __construct(private BrandService $service)
    {
    }

    public function index()
    {
        return view('admin.brand.index', [
            'brands' => $this->service->findAllWithPaginate()
        ]);
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(SaveBrandRequest $request)
    {
        try {
            $brand = $this->service->save($request, new Brand());
            return redirect()->route('brands.show', $brand->id);
        } catch (\Throwable $exception) {
            Log::error($exception->getMessage());
            Log::error($exception->getTraceAsString());
            return redirect()->route('brands.index');
        }
    }

    public function show(Brand $brand)
    {
        return view('admin.brand.show', ['brand' => $brand]);
    }

    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', ['brand' => $brand]);
    }


    public function update(SaveBrandRequest $request, Brand $brand)
    {
        try {
            $brand = $this->service->save($request, $brand);
            return redirect()->route('brands.show', $brand->id);
        } catch (\Throwable $exception) {
            Log::error($exception->getMessage());
            Log::error($exception->getTraceAsString());
            return redirect()->route('brands.index');
        }
    }


    public function destroy(Brand $brand)
    {
        try {
            $brand->delete();
            return redirect()->route('brands.index');
        } catch (\Throwable $exception) {
            Log::error($exception->getMessage());
            Log::error($exception->getTraceAsString());
            return redirect()->route('brands.index');
        }
    }
}
