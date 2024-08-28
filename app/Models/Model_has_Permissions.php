<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_has_Permissions extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_type',
        'permission_id',
        'model_id',
    ];
}
