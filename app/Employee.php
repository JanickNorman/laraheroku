<?php

namespace App;

use App\AuthenticatableEmployee as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Employee extends Authenticatable
{
	use Notifiable;
    //
    protected $table = "emp_mst";
    protected $fillable = ['employee_name'];

}
