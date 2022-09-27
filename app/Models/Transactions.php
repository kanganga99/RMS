<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = 'trasactions';
    protected $primarykey = 'id';
    protected $fillable = ['name','houseno','billingfor','expectedamount','amountpaid','balance'];
}
