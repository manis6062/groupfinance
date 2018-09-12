<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    protected $table = "profile";
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      protected $fillable = ['user_id' , 'first_name' , 'last_name' , 'phone' , 'mobile' , 'address_1' , 'address_2' , 'job_title' , 'bio' , 'gender' , 'citizenship' , 'licence' , 'family_details' , 'education' , 'city' , 'country_1' , 'country_2' , 'post_code'];
}
