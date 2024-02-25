<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Modern Velvet Sofa',
                'price' => 899.99,
                'category' => 'Furniture',
                'description' => 'Bring contemporary style to your living room with this sleek velvet               sofa. Featuring a minimalist design and plush cushions, this sofa offers both comfort               and sophistication. Perfect for small spaces or modern homes.',
                'img' => null,
                'img_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Abstract Canvas Wall Art',
                'price' => 129.99,
                'category' => 'Decor',
                'description' => 'Add a pop of color to your walls with this vibrant abstract canvas wall art. Hand-painted by skilled artists, each piece is unique and adds personality to any room. This piece comes ready to hang and is sure to be a conversation starter.',
                'img' => null,
                'img_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Rustic Farmhouse Dining Table',
                'price' => 599.99,
                'category' => 'Furniture',
                'description' => "Gather family and friends around this charming farmhouse dining table. Crafted from reclaimed wood, it exudes rustic charm and character. With its sturdy construction and spacious design, it's perfect for both casual meals and formal gatherings.",
                'img' => null,
                'img_description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
