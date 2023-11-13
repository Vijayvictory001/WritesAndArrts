<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableTrait;


class Users extends Model implements AuthenticatableTrait
{
    use Authenticatable;
    use HasFactory;

    protected $fillable = ['Name','Email','Password'];
    
}
