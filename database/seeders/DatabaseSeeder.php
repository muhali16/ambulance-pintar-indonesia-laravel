<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ProductCategory;
use App\Models\ProductSpecification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'azmbkhry@gmail.com',
            'password' => '$2y$10$TKIAdEBUYaGGRi.RGnAqJ.e.FDFqSM8LJtGbbaAUqlotKcY0t.zZu' // password123_
        ]);

        Category::create([
            'name' => 'Kesehatan'
        ]);
        Category::create([
            'name' => 'Sertifikasi'
        ]);
        Category::create([
            'name' => 'Karoseri'
        ]);

        ProductCategory::create([
            'name' => 'Ambulance',
        ]);

        ProductCategory::create([
            'name' => 'Truck',
        ]);

        ProductCategory::create([
            'name' => 'Other',
        ]);

        ProductSpecification::create([
            'name' => 'Spesifikasi Standar',
            'specification' => 'Ambulance dengan spesifikasi standar nasional Indonesia'
        ]);

        ProductSpecification::create([
            'name' => 'Spesifikasi Jenazah',
            'specification' => 'Ambulance dengan spesifikasi standar nasional Indonesia'
        ]);

        ProductSpecification::create([
            'name' => 'Spesifikasi VVIP',
            'specification' => 'Ambulance dengan spesifikasi super elegan dengan peralatan tambahan'
        ]);
    }
}
