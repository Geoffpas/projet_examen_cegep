<?php

namespace Database\Seeders;

use App\Models\Fait;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // ajoute 20 texte de lorem ipsum fictifs a la table faits

        // \App\Models\Fait::factory(20)->create();



        // ***************** BONUS#2 *********************

        $faits = json_decode(
            file_get_contents(storage_path("app/data/cat-facts.json"))
        );

        // Chaque fact lue dans le fichier est insérée dans la BDD
        foreach ($faits->data as $un_fait) {
            Fait::insert([
                "texte" => $un_fait->fact,
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }
    }
}
