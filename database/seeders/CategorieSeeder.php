<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cateogorie_name = ['Sport', 'Conference', 'Metting', 'Evenement', 'Offres'];


        foreach ($cateogorie_name as $categorie) {
            Categorie::create([
                'nom' => $categorie,
            ]);
    }
}

}
