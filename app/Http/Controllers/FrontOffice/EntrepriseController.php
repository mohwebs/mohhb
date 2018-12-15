<?php

namespace App\Http\Controllers\FrontOffice;

use App\Entreprise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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
        $entreprise = Entreprise::where('slug',$slug)->first();

        return view('entreprise.show',['entreprise' => $entreprise]);


    }

}
