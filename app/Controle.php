<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Controle extends Model
{
    protected $fillable = ['lettreDeMarche', 'reception', 'rapport',  'cahier', 'conformite', 'signat', 'rapportDeReception', 'retenue', 'validation', ];
}
