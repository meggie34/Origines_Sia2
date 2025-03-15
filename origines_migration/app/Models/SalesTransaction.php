<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesTransaction extends Model
{
    use HasFactory;

    protected $table = 'sales_transactions';

    protected $fillable = ['Custom Name', 'Total Payment', 'Payment Date', 'sd_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'users_id');
    }
}





