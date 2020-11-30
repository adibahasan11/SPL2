<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddTeacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Initials',
        'Designation',
        'IsActive',
    ];
}