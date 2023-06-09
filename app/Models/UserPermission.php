<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'user_permissions';

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'permission_id',
    ];
}
