<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductPrice;
use App\Models\ProductPricePrivilege;
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

        // $this->call(ThumbnailSeeder::class);

        User::factory()->create([
            'name' => 'med',
            'email' => 'med@convergephp.com',
            'isAdmin'=>true
        ]);

        User::factory()->create([
            'name' => 'ayoub',
            'email' => 'ayoub@convergephp.com',
            'isAdmin'=>true
        ]);


        ProductPricePrivilege::create([
            'id' => 1,
            'prod_activation_limit' => 5,
            'local_activation_limit' => 15,
        ]);

        ProductPricePrivilege::create([
            'id' => 2,
            'prod_activation_limit' => 10,
            'local_activation_limit' => 30,
        ]);

        Product::create([
            'id' => 1,
            'name' => 'blade components',
            'paddle_product_id' => 'pro_01jptqfamrapxmwpp7s270fj6w',
            'slug' => 'components',
            'description' => 'take you documentation to the next level with +20 pre-built blade components designd exclusivly for documentation and blogging plaforms',
        ]);

        Product::create([
            'id' => 2,
            'name' => 'layouts and themes',
            'paddle_product_id' => 'pro_01jpw505awn7pjgq18k3aeagtv',
            'slug' => 'layouts-themes',
            'description' => 'make your documentation unique with highly crafted themes and layouts to unify your documentation workflow',
        ]);

        ProductPrice::create([
            'id' => 1,
            'product_id' => 1,
            'name' => 'starter pack',
            'paddle_price_id' => 'pri_01jptqhwz2f7b34edy7574dahb', // 29$
            'description' => 'Perfect for solo developers',
            'amount' => 29,
            'features' => [
                'one production licence',
                '3 licence keys',
                'forever updates'
            ]
        ]);

        ProductPrice::create([
            'id' => 2,
            'product_id' => 1,
            'name' => 'agency',
            'paddle_price_id' => 'pri_01jptqkj6r55xba71ff7mm0vwz', // 99$
            'description' => 'Ideal for teams and multiple client projects',
            'amount' => 99,
            'features' => [
                'Unlimited dev, staging, and production projects',
                'Unlimited license keys',
                'Unlimited production domains',
                'forever updates',
                'Email Support'
            ]
        ]);

        ProductPrice::create([
            'id' => 3,
            'product_id' => 2,
            'name' => 'starter pack',
            'description' => 'Perfect for solo developers',
            'paddle_price_id' => 'pri_01jpw52t5m31was20nv508vby9', // 19$
            'amount' => 19,
            'features' => [
                'one production licence',
                '3 licence keys',
                'forever updates'
            ]
        ]);

        ProductPrice::create([
            'id' => 4,
            'product_id' => 2,
            'name' => 'agency',
            'paddle_price_id' => 'pri_01jpw5476s8j0mhxsy1ve4a1hy', // 45$
            'amount' => 45,
            'description' => 'Ideal for teams and multiple client projects',
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
