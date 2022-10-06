<?php

namespace App\Http\Filters;


class CarFilter extends QueryFilter
{

    public function car_model_id($value)
    {
        if (!$value) {
            return;
        }

        $this->builder->where('car_model_id', $value);
    }

    public function color($value)
    {
        if (!$value) {
            return;
        }

        $this->builder->where('color', $value);
    }

    public function date($value)
    {
        if (!$value) {
            return;
        }

        $this->builder->where('release_year', $value);
    }
}
