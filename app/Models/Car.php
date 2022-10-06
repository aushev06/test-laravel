<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string $name
 * @property string $img
 * @property string $color
 * @property string $state_number
 * @property string $transmission
 * @property float $rental_price
 * @property string $release_year
 * @property int $car_model_id
 *
 * @property CarModel $model
 */
class Car extends Model
{
    use HasFactory;

    protected $with = ['model'];

    protected $fillable = [
        'img',
        'color',
        'state_number',
        'transmission',
        'rental_price',
        'release_year',
        'car_model_id',
    ];

    public function model()
    {
        return $this->belongsTo(CarModel::class, 'car_model_id', 'id');
    }

    public function scopeFilter($builder, $filters)
    {
        return $filters->apply($builder);
    }
}
