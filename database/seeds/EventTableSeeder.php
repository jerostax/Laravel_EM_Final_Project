<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //création des catégories
         App\Category::create([
            'titre'=>'Expos'
        ]);
        App\Category::create([
            'titre' => 'WorkShop'
        ]);
        App\Category::create([
            'titre' => 'Excursions'
        ]);
        App\Category::create([
            'titre' => 'Soirée'
        ]);
        
        //Suppresion de toutes les images avant de commencer les seeders
        Storage::disk('local')->delete(Storage::allFiles());

        //Création de 1 évènement à partir de la factory
        factory(App\Event::class, 1)->create()->each(function($event){
            //association d'une catégorie à un évenement
            $category = App\Category::find(rand(1,4));

            //Association d'une catégorie pour chaque évènements          
            $event->category()->associate($category);

            //Sauvegarde de l'assiociation
            $event->save();

            //Ajout des images
            $link = str_random(12).'.jpg'; // hash de lien pour la sécurité (injection de scripts de protection)
            $file = file_get_contents('http://placeimg.com/640/480/arch');
            Storage::disk('local')->put($link, $file);

            $event->pictureEvent()->create([
                'titre' => 'Default',  
                'url_img_event' => $link
            ]);
        });
    }
}
