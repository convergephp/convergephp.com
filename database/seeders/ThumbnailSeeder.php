<?php

namespace Database\Seeders;

use App\Models\Thumbnail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileCannotBeAdded;

class ThumbnailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imageUrls = [
            'https://plus.unsplash.com/premium_photo-1689962253303-df6f8fd16069?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1742603096268-0efc93dcc95a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw0OXx8fGVufDB8fHx8fA%3D%3D',
            'https://images.unsplash.com/photo-1742268582642-c28247e00a1d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw2MHx8fGVufDB8fHx8fA%3D%3D',
        ];

        //
        for ($i = 1; $i <= 10; $i++) {
            // Créer d'abord le thumbnail
            $thumbnail = Thumbnail::create([
                'name' => fake()->name(),
                'title' => fake()->jobTitle(),
                'description' => fake()->paragraph(),
                'product_id' => fake()->randomElement([1, 2]) // Utiliser les IDs 1 ou 2 existants
            ]);

            try {
                // Utiliser une URL aléatoire parmi les 3 fournies
                $randomUrl = $imageUrls[array_rand($imageUrls)];

                // Ajouter le média directement au thumbnail
                $media = $thumbnail->addMediaFromUrl($randomUrl)
                    ->withCustomProperties([
                        'type' => $thumbnail->product_id == 1 ? 'component' : 'layout' // Exemple de propriété
                    ])
                    ->toMediaCollection('thumbnails');

                $this->command->info("Thumbnail #{$i} created successfully and associated to media ID: {$media->id}");
            } catch (FileCannotBeAdded $e) {
                $this->command->error("Error #{$i}: " . $e->getMessage());
            } catch (\Exception $e) {
                $this->command->error("Global error #{$i}: " . $e->getMessage());
            }
        }
    }
}
