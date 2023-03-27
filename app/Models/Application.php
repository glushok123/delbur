<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'applications';

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'location',
        'type_boreholes',
        'construction_borehole_pipes',
        'equipment',
        'date_start',
        'material',
        'comment',
        'active',
        'coordinate_x',
        'coordinate_y',
        'acceptable_price',
    ];
}
