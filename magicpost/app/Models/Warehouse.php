<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parcel;

class Warehouse extends Model
{
    use HasFactory;
    protected $table = 'office';
    protected $fillable=[
        'managerid',
        'officeID',
        'parceList',
        'incomingFromOffice',
        'incomingFromOtherWarehouse',
        'outgoingToOtherWarehouse',
        'outgoingToCustomer'
    ];
}
