<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['date', 'nature', 'devise', 'montant', 'deduire', 'beneficiaire', 'compteBeneficiaire', 'banque', 'objet', 'dateDeSignature', 'dateDeCloture', 'financement', 'categorie', 'montantRef', 'marche', 'user_id', ];
}
