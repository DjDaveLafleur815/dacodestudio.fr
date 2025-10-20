<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'name', 'company', 'email', 'phone',
        'project_type', 'budget', 'delay', 'message', 'status'
    ];
}
