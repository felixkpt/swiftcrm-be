<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
 
    protected $fillable = ['name', 'guard_name', 'uri', 'user_id', 'slug', 'icon', 'hidden'];
    use HasFactory;
}
