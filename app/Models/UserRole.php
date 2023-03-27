<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'user_roles';

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'role_id',
    ];
}
