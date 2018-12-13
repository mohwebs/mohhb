<?php

namespace App\Http\Controllers\Entreprise;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }



    public function destroy($id)
    {
        //
    }
}
