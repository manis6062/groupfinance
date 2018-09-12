<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class UserRoles extends Model
{
    protected $table = "user_roles";
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      protected $fillable = ['user_id' , 'role_id'];
}
