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

            public function profile()
            {
                return $this->hasOne('App\Models\Profile', 'user_id', 'id');       
            }

            public function userAccounts(){
                return $this->belongsToMany('App\Models\Accounts', 'user_accounts' , 'user_id', 'id');
            }

            public function role(){
                return $this->belongsToMany('App\Models\Roles', 'user_roles' , 'user_id', 'id');
            }
   
       
}
