<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
	use Notifiable;
    //
    protected $table = "emp_mst";

    protected $fillable = ['employee_number', 'employee_name', 'cell_no', 'creation_date'];

    public $timestamps = false;
}
