<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = [
        'our_company_name', 'our_company_address', 'our_email', 'our_phone', 'their_company_name', 'their_company_address', 'their_email', 'their_phone',
        'invoice_number', 'description', 'discount', 'sub_total', 'invoice_number'
    ];
}
