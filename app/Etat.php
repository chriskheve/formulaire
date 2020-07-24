<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    protected $fillable = ['montantDebourse', 'nonDecaisse', 'paiement',  'document_id', 'user_id', ];
}
