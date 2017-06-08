<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClaimDetail extends Model
{
	//
	protected $table = 'claim_detail';

	protected $fillable = ['trx_detail_id', 'trx_header_id', 'taxi_from', 'taxi_to', 'taxi_time', 'taxi_voucher_no', 'taxi_amount', 'batch_id'];

	public $timestamps = false;

	function header() {
		return $this->belongsTo('App\ClaimHeader', 'trx_id', 'trx_header_id');
	}
}
