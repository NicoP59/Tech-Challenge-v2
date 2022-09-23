<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Argonaute extends Model
{

    protected $fillable = [
        "id",
        "nom,"
    ];

    use HasFactory;
}

// Modèles vous permet de récupérer, d'insérer et de mettre à jour des informations dans votre table de données.