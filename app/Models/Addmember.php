<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addmember extends Model
{
    use HasFactory;
    protected $fillable = [
        'remiNo',
        'bankName',
        'branchName',
        'remitterCountry',
        'remitterName',
        'receiverName',
        'receiverNumber',
        'receiverEmail',
        'receiverIdType',
        'receiverId',
        'receiverAdd',
        'receiverrela',
        'method',
        'comment',
    ];
}
