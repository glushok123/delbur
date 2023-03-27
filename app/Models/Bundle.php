<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdvertisingNetwork;
use App\Models\Sphere;
use App\Models\User;

class Bundle extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'bundles';

    /**
     * @var array
     */
    protected $fillable = [
        'warranty', 
        'advertising_networks_id', 
        'spheres_id', 
        'price', 
        'description',
        'user_id',
    ];

    public function advertising_networks()
    {
       return $this->belongsTo(AdvertisingNetwork::class);
    }

    public function spheres()
    {
       return $this->belongsTo(Sphere::class);
    }
    
    public function user()
    {
       return $this->belongsTo(User::class);
    }
}