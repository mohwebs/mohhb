<?php

namespace App\Http\Controllers\FrontOffice;

use App\Entreprise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class EntrepriseController extends Controller
{


    public function indexgrid()

    {
           $entreprise = Entreprise::all();

           return view('entreprise.index.grid',['entreprises' => $entreprise]);


    }

    public function indexlist()

    {
        $entreprise = Entreprise::all();

        return view('entreprise.index.list',['entreprises' => $entreprise]);


    }

    public function show($slug)

    {
        $entreprise = Entreprise::find($slug);

        return view('entreprise.show',['entreprise' => $entreprise]);


    }

}
