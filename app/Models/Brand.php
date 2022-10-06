<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property string $name
 */
class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];
}
