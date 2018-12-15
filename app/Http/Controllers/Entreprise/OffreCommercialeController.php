<?php

namespace App\Http\Controllers\Entreprise;

use App\Http\Requests\OffreCommercialeRequest;
use App\OffreCommerciale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OffreCommercialeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:entreprise');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        return view('entreprise.offre.commerciale.create');
    }

    public function store(OffreCommercialeRequest $request)
    {
        $offre = new OffreCommerciale();

        $offre->titre= $request->input('titre');
        $offre->slug = str_slug($request->input('titre'));
        $offre->description = $request->input('description');
        $offre->produit = $request->input('produit');
        $offre->entreprise_id = Auth::user()->id;

        $offre->save();

    }



    public function edit($id)
    {
        //
    }


    public function update(OffreCommercialeRequest $request)
    {


        $offre = OffreCommerciale::where('slug',$slug)->first();

        $offre->titre= $request->input('titre');
        $offre->slug = str_slug($request->input('titre'));
        $offre->description = $request->input('description');
        $offre->entreprise_id = Auth::user()->id;

        $offre->save();

        return redirect('entreprise/'.Auth::user()->slug.'/offre/commerciale/'.$offre->slug);
    }



    public function destroy($id)
    {
        //
    }
}
