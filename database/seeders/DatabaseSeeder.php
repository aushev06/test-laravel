<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'BMW',
                'models' => [
                    [
                        'name' => 'M5 F90',
                        'auto' => [
                            [
                                'release_year' => '2001-04-03',
                                'color' => 'Черный',
                                'state_number' => 'А006АА06',
                                'img' => 'default.jpg',
                                'transmission' => 'auto',
                                'rental_price' => '12.3',
                            ]
                        ]
                    ],
                    [
                        'name' => 'M5 F91',
                        'auto' => [
                            [
                                'release_year' => '2001-04-02',
                                'color' => 'Черный',
                                'state_number' => 'А005АА06',
                                'img' => 'default.jpg',
                                'transmission' => 'mechanics',
                                'rental_price' => '33.3',
                            ]
                        ]
                    ],
                    [
                        'name' => 'M5 F92',
                        'auto' => [
                            [
                                'release_year' => '2001-04-01',
                                'color' => 'Черный',
                                'state_number' => 'А001АА01',
                                'img' => 'default.jpg',
                                'transmission' => 'mechanics',
                                'rental_price' => '33.3',
                            ]
                        ]
                    ],
                ]
            ],
            [
                'name' => 'Toyota',
                'models' => [
                    [
                        'name' => 'Camry 50',
                        'auto' => [
                            [
                                'release_year' => '2001-04-03',
                                'color' => 'Черный',
                                'state_number' => 'А006АА06',
                                'img' => 'default.jpg',
                                'transmission' => 'auto',
                                'rental_price' => '11.3',
                            ]
                        ]
                    ],
                    [
                        'name' => 'Camry 55',
                        'auto' => [
                            [
                                'release_year' => '2001-04-02',
                                'color' => 'Белый',
                                'state_number' => 'А005АА06',
                                'img' => 'default.jpg',
                                'transmission' => 'auto',
                                'rental_price' => '44.3',
                            ]
                        ]
                    ],
                    [
                        'name' => 'Camry 70',
                        'auto' => [
                            [
                                'release_year' => '2001-04-01',
                                'color' => 'Черный',
                                'state_number' => 'А001АА01',
                                'img' => 'default.jpg',
                                'transmission' => 'mechanics',
                                'rental_price' => '55.3',
                            ]
                        ]
                    ],
                ]
            ],
            [
                'name' => 'Hyundai',
                'models' => [
                    [
                        'name' => 'Solaris 50',
                        'auto' => [
                            [
                                'release_year' => '2019-06-03',
                                'color' => 'Черный',
                                'state_number' => 'А006АА06',
                                'img' => 'default.jpg',
                                'transmission' => 'auto',
                                'rental_price' => '11.3',
                            ]
                        ]
                    ],
                    [
                        'name' => 'Solaris 55',
                        'auto' => [
                            [
                                'release_year' => '2021-01-02',
                                'color' => 'Белый',
                                'state_number' => 'А005АА06',
                                'img' => 'default.jpg',
                                'transmission' => 'auto',
                                'rental_price' => '44.3',
                            ]
                        ]
                    ],
                    [
                        'name' => 'Solaris 70',
                        'auto' => [
                            [
                                'release_year' => '2022-04-01',
                                'color' => 'Черный',
                                'state_number' => 'А001АА01',
                                'img' => 'default.jpg',
                                'transmission' => 'mechanics',
                                'rental_price' => '55.3',
                            ]
                        ]
                    ],
                ]
            ]
        ];


        foreach ($data as $datum) {
            $brand = Brand::query()->create(['name' => $datum['name']]);

            foreach ($datum['models'] as $model) {
                $createdModel = CarModel::query()->create(['name' => $model['name'], 'brand_id' => $brand->id]);

                foreach ($model['auto'] as $auto) {
                    Car::query()->create(
                        [...$auto, 'car_model_id' => $createdModel->id]
                    );
                }
            }
        }
    }
}
