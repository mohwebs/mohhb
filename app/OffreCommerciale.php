<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffreCommerciale extends Model
{


    public function entreprises(){
        return $this->belongsTo('App\Entreprise','entreprise_id');
    }
}
