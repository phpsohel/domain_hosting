<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain_Hosting extends Model
{
    use HasFactory;
    protected $fillable = [
        'cust_id',
        'domain_name',
        'domain_author_name',
        'domain_yearly_price',
        'domain_start_date',
        'domain_expiry_date',
        'hosting_space',
        'hosting_author_name',
        'hosting_start_date',
        'hosting_expiry_date',
        'hosting_yearly_price'
    ];
    protected $table = 'domain_hostings';

    public function customer(){
        return $this->belongsTo(Customer::class, 'cust_id', 'id');
    }
}