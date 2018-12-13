<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Entreprise;
class EntrepriseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for ($user = 1 ; $user < 9 ; $user ++) {

             Entreprise::create([


                 'name' => "hbhome$user",
                 'email' =>"hbhome$user@gmail.com",
                 'slug' => "hbhome$user",
                 'tel' => "0794404811",
                 'password' => Hash::make("hbhome"),
                  'datefoundation' => '12-03-2000',
                  'categorie_id' => $user


                 ]);

         }



    }
}
