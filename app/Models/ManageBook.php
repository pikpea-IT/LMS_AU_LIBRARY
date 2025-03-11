<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ManageBook extends Model
{
    use HasFactory;
    protected $table = 'managebooks';

    protected $guarded = [];
}
