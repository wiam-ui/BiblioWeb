<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class livre extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'auteur',
        'editeur',
        'dateEdition',
        'NbrExemplaire',
        'image',
        'categorie_id',
    ];
   
}
