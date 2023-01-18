<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expire_List extends Model
{
    use HasFactory;
    protected $fillable = [
        'domain_hosting_id',
        'customer_id'
    ];
}