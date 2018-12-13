<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categorie = new Categorie();

        $categorie->nom = 'Informatique, Télécom, Internet';

        $categorie->save();

           $categorie = new Categorie();

        $categorie->nom = 'Energie, Mines, Matière première';

        $categorie->save();

            $categorie = new Categorie();

        $categorie->nom = 'Banque, Assurance, Finance';

        $categorie->save();

          $categorie = new Categorie();

        $categorie->nom = 'BTP, Construction, Immobilier';

        $categorie->save();

          $categorie = new Categorie();

        $categorie->nom = 'Distribution, Commerce';

        $categorie->save();

          $categorie = new Categorie();

        $categorie->nom = 'Industries';

        $categorie->save();

             $categorie = new Categorie();

        $categorie->nom = 'Services';

        $categorie->save();

               $categorie = new Categorie();

        $categorie->nom = 'Fonction publique, Administration';

        $categorie->save();

    }
}
