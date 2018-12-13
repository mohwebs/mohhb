<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function entreprises()
    {
        return $this->hasMany('App\Entreprise');
    }
}
