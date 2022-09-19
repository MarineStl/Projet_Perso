<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'mail', 'portable', 'nom', 'prenom', 'adresse', 'complement', 'code', 'ville', 'produit', 'quantite', 'prix', 'ttc', 'paiement'
    ];
}
