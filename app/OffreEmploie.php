<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffreEmploie extends Model
{
    public function entreprises(){
        return $this->belongsTo('App\Entreprise','entreprise_id');
    }
}
