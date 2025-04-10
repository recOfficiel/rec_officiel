<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Categorie;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $titre = fake()->unique()->sentence;
        $categories = Categorie::inRandomOrder()->first();
        $created = $this->faker->dateTimeBetween('-1 year', 'now');
        $user = User::all()->first();
        return [
            'titre' => $titre,
            'slug' => Str::slug($titre),
            'contenu' => fake()->paragraph,
            'Image' => fake()->imageUrl,
            'user_id' => $user->id,
            'categorie_id' => $categories->id,
            'created_at' => $created,
            'updated_at' => $created,

        ];
    }
}
