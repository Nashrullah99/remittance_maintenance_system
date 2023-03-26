<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addtransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'method',
        'receivedBy',
        'relationship',
        'fk',
    ];
}
