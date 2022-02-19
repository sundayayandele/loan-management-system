<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionHistory extends Model
{
    use HasFactory;

 /**
     * The attributes that are mass assignable.
     *
          */

    protected $fillable = [
        'transaction_id',
        'message',
        'airtel_money_id',
    ];



    
}




