<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstructionBoreholePipes extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'construction_borehole_pipes';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 
        'slug', 
    ];
}
