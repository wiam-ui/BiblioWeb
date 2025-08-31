<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = ['firstName', 'lastName', 'phone',  'address','user_id'];
}
