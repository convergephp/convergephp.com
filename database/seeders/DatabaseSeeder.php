<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductPrice;
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

        Product::create([
            'id' => 1,
            'name' => 'blade components toolkit',
            'slug' => 'blade-components-toolkit',
            'description' => 'take you documentation to the next level with +20 pre-built blade components designd exclusivly for documentation and blogging plaforms',
        ]);

        ProductPrice::create([
            'id' => 1,
            'product_id' => 1,
            'paddle_price_id' => 'pri_01jptqhwz2f7b34edy7574dahb', // 29$
            'features' => [
                'one production licence',
                '3 licence keys',
                'forever updates'
            ]
        ]);
        ProductPrice::create([
            'id' => 2,
            'product_id' => 1,
            'paddle_price_id' => 'pri_01jptqkj6r55xba71ff7mm0vwz', // 99$
            'features' => [
                'Unlimited dev, staging, and production projects',
                'Unlimited license keys',
                'Unlimited production domains',
                'forever updates',
                'Email Support'
            ]
        ]);
    }
}
