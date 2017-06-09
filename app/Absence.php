<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    //
    protected $table = 'absence_trx';

    public $timestamps = false;

    public $fillable = ['abs_trx_id', 'date_from', 'date_to', 'project_number', 'employee_number', 'activity_status', 'created_by', 'creation_date', 'batch_id'];

    protected $primaryKey = 'abs_trx_id';
}
