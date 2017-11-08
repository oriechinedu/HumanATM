<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    protected $fillable = [
    	'payer_id', 'withdrawer_id',
    	'amount',  'status',
    ];
}
