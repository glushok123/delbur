<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borehole extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'boreholes';

    /**
     * @var array
     */
    protected $fillable = [
        'x', 
        'y', 
        'z', 
        'depth', 
        'name_company', 
        'phone_company', 
        'hintContent', 
        'balloonContentHeader', 
    ];
}
