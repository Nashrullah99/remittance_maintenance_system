<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $fillable = [
        'branchName',
        'receiverName',
        'receiverNumber',
        'receiverEmail',
        'receiverIdType',
        'receiverId',
        'receiverAdd',
        'receiveroccu',
        'comment',
    ];
}
