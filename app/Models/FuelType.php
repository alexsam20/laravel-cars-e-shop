<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    use HasFactory;

//    protected $table = 'fuel_types';
//    protected $primaryKey = 'fuel_type_id';
//    public $incrementing = false;
//    protected $keyType = 'string';
//    public const CREATED_AT = 'create_date';
//    public const UPDATED_AT = null; // NO Updated

    public $timestamps = false;
}
