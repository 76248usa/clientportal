<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $cast = [
        //'begin' => 'date:hh:mm'

    ];

    protected $fillable = [
        'our_company_name',
        'our_company_address',
        'our_email',
        'our_phone',
        'their_company_name',
        'their_company_address',
        'their_email',
        'their_phone',
        'product_one',
        'product_two',
        'product_three',
        'product_four',
        'product_one_price',
        'product_two_price',
        'product_three_price',
        'product_four_price',
        'product_one_quantity',
        'product_two_quantity',
        'product_three_quantity',
        'product_four_quantity',
        'product_one_total',
        'product_two_total',
        'product_three_total',
        'product_four_total',
        'sub_total',
        'discount',
        'tax',
        'total',
    ];
}
