<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';
    protected $fillable = ['date_emprunt', 'heure_emprunt', 'date_reservation','user_id', 'etat', 'livre_id'];
    public function livres() {
        return $this->belongsToMany(Livre::class, 'livre_reservation' ,'reservation_id' ,'livre_id');
    }
}
