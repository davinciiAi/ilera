<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{

    protected $table = 'dependents';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'f_name',
        'phone',
        'location',
        'benefactor',
        'address',
        'health_center',
        'health_addr',
        'created_at',
        'updated_at',
    ];

}
