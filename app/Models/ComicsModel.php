<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComicsModel extends Model
{
    use HasFactory;
    protected $guarded = ['titolo'];
}
