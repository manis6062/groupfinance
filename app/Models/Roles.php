<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roles extends Model
{
    protected $table = "roles";
    protected $dates = ['deleted_at'];

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      protected $fillable = ['name' , 'description' , 'deleted_at'];
}
