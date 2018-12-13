<?php

namespace App\Http\Controllers\Entreprise;

use App\Http\Requests\EntrepriseRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entreprise;
use Illuminate\Support\Facades\Hash;
use Auth;

use Illuminate\Http\UpLoadedFile;
use Illuminate\Support\Facades\URl;
use Illuminate\Support\Facades\DB;

class EntrepriseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:entreprise');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    //permet de recuperer un entreprise et le mettre dans la liste des entreprises
    public function edit($id){
        //recuperer le formulaire de la bdd
        $entreprise = Entreprise::find($id);
        return view('entreprise.edit');

    }
    //permet de modifier un entreprise

    public function update( EntrepriseRequest $request ,$id){
        // récupérer le formulaire



        $entreprise = Entreprise::find($id);
        //on affecte au champ de la table entreprises le champ nom de notre formulaire
        $entreprise->name = $request->input('name');
        $entreprise->datefoundation = $request->input('datefoundation');
        $entreprise->tel = $request->input('tel');
        $entreprise->description = $request->input('description');
        $entreprise->adresse = $request->input('adresse');
        $entreprise->ville = $request->input('ville');
        $entreprise->region = $request->input('Region');
        $entreprise->postal = $request->input('postal');
        $entreprise->email = $request->input('email');
        $entreprise->facebook = $request->input('facebook');
        $entreprise->twitter = $request->input('twitter');
        $entreprise->youtube = $request->input('youtube');
        $entreprise->linkedin = $request->input('linkdin');
        $entreprise->instagram = $request->input('instagram');
        $entreprise->siteweb = $request->input('siteweb');


        if($request->hasFile('logo')){
            $entreprise->logo=$request->logo->store('image');
        }
        //persister l'objet (les données) dans la base de donnée
        $entreprise->save();
        //aprés modification on se redirige vers le profile
        return redirect('entreprise/'.$id.'/edit')
            ->with('success', ' '.$entreprise->name.'  modifié avec succès.');




    }



    public function updatephoto(Request $request ,$id){
        // récupérer le formulaire

        $request->validate([

            'pic' => 'image',


        ]);

        $entreprise = Entreprise::find($id);

        if($request->hasFile('pic')){
            $entreprise->logo=$request->pic->store('image');
        }
        //persister l'objet (les données) dans la base de donnée
        $entreprise->save();
        //aprés modification on se redirige vers le profile
        return redirect('entreprise')
            ->with('success', ' '.$entreprise->name.'  modifié avec succès.');


    }
}
