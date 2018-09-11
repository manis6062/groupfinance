<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "users";
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      protected $fillable = ['name' , 'email' , 'password'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
        protected $dates = ['deleted_at'];
            public function setFirstnameAttribute($firstname){
                 $this->attributes['firstname'] = ucfirst($firstname);
            }
            public function setLastnameAttribute($surname){
                 $this->attributes['surname'] = ucfirst($surname);
            }
            public function getFullName(){
               return $this->firstname . ' ' . $this->surname;
            }
   
       
}
