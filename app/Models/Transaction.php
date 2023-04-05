<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';
    protected $primarykey = 'id_transaction';

    protected $fillable = [
        'no_transaction',
        'created_at',
    ];

}
