<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen(public_path('aliexpress.csv'), 'r');
        while (!feof($file)) {
            $line[] = fgetcsv($file, 1024);
        }
        $lines = [];
        for ($i = 1; $i < count($line) - 1; $i++) {
            $lines[] = $line[$i];
        }

        foreach ($lines as $val) {
            Produit::create([
                "title"=>$val[0],
                "body"=>$val[1],
                "variantPrice"=>$val[2],
                "VarianteCompareAtPrice"=>$val[3],
                "Shipping"=>$val[4],
                "imagesrc"=>$val[5]
            ]);
    }}
}
