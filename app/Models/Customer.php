<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'company',
        'email_1',
        'email_2',
        'phone_1',
        'phone_2',
        'website',
        'address',
        'status',
    ];

}
