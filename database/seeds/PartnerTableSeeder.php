<?php

use Illuminate\Database\Seeder;

class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Suppresion de toutes les images avant de commencer les seeders
        Storage::disk('local')->delete(Storage::allFiles());

        //Création de 10 partenaires à partir de la factory
        factory(App\Partner::class, 10)->create()->each(function($partner){

            //Ajout des images
            $link = str_random(12).'.jpg'; // hash de lien pour la sécurité (injection de scripts de protection)
            $file = file_get_contents('http://placeimg.com/640/480/arch'); 
            Storage::disk('local')->put($link, $file);

            $partner->picturePartner()->create([
                'titre' => 'Default', 
                'lien' => $link
            ]);
            $partner->save(); 
        });
    }
}
