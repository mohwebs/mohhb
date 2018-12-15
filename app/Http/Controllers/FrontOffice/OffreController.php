<?php

namespace App\Http\Controllers\FrontOffice;

use App\Entreprise;
use App\OffreCommerciale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OffreController extends Controller
{
    public function  showOffreCommerciale($slugent,$slugoffre)
    {

         $user = Entreprise::where('slug',$slugent);
        $offre = OffreCommerciale::where('slug',$slugoffre)->first();

        return view('entreprise.offre.commerciale.show', ['offre' => $offre]);


    }

}
