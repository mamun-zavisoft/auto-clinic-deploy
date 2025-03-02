<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

     /**
     * Get the related Purchase or Sale.
     */
    public function transaction()
    {
        return $this->morphTo(null, 'transaction_type', 'transaction_id');
    }

    public function paymentDetails()
    {
        return $this->hasMany(PaymentDetail::class);
    }
}
