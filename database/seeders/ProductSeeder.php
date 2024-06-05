<?php

namespace Database\Seeders;

use App\Models\Asset;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('local')->get('/json/nike_db.json');
        $products = json_decode($json, true);

        foreach ($products as $product) {
            $imagesJson = json_encode($product['images']);

            $data = Product::updateOrCreate([
                'name' => $product['name'],
                'description' => $product['description'],
                'tag' => $product['tag'],
                'regular_price' => $product['regular_price'],
                'quantity' => rand(1, 100),
                'sale_price' => $product['sale_price'] ?? 0,
                'gender' => $product['gender'],
            ]);

            if (isset($product['images']) && is_array($product['images'])) {
                foreach (json_decode($imagesJson, true) as $key => $image) {
                    $asset = Asset::create([
                        'filename' => 'image',
                        'path' => $image
                    ]);

                    ($key === 0) ?
                        $data->assets()->attach($asset->id, ['type' => 'main']) :
                        $data->assets()->attach($asset->id);
                }
            }
        }

    }
}
