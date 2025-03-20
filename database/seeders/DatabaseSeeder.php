<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'med',
            'email' => 'med@convergephp.com',
        ]);

        User::factory()->create([
            'name' => 'ayoub',
            'email' => 'ayoub@convergephp.com',
        ]);

        Product::factory()->create([
            'name' => 'blade components toolkit',
            'slug' => 'blade-components-toolkit',
            'description' => 'take you documentation to the next level with +20 pre-built blade components designd exclusivly for documentation and blogging plaforms',
        ]);

        
    }
}
