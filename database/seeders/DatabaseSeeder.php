<?php

namespace Database\Seeders;

use App\Models\BranchOffice;
use App\Models\Category;
use App\Models\CompanyInformation;
use App\Models\ProductCategory;
use App\Models\ProductSpecification;
use Faker\Provider\Company;
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

        BranchOffice::create([
            'city_name' => 'Bekasi',
            'contact_addree' => '<p>Griya Asri Bahagia, Blok E2 No. 13, Kel. Bahagia, Kec. Babelan, Bekasi 17610</p><ul><li><a href="https://wa.me/6285173110904"><strong style="text-decoration: underline;">WhatsApp</strong></a></li><li><a href="mailto:azmbkhry@gmail.com"><strong style="text-decoration: underline;">Email</strong></a></li></ul>',
            'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.679339706034!2d107.02192737407803!3d-6.1736683604957445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69894a3b26f3c9%3A0xd1041d4cde894037!2sPT.%20Ambulance%20Pintar%20Indonesia%20Official%20%2F%2F%20Jual%20Mobil%20Ambulance%20Ready%20Stock!5e0!3m2!1sid!2sid!4v1716826627078!5m2!1sid!2sid',
        ]);

        BranchOffice::create([
            'city_name' => 'Padang',
            'contact_addree' => '<p>675R+3M3, Katapiang, Kec. Batang Anai, Kabupaten Padang Pariaman, Sumatera Barat 25586&nbsp;</p><ul><li><a href="https://wa.me/6285173110904"><strong>WhatsApp</strong></a></li></ul>',
            'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.4367909751436!2d100.2916654!3d-0.7923709000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4c3c50614fa51%3A0xcba985f1b8506ba7!2sWORKSHOP%20KAROSERI%20AMBULANCE%20PT.%20ANDALAS%20PROSPEK%20INDONESIA!5e0!3m2!1sid!2sid!4v1717695285418!5m2!1sid!2sid',
        ]);

        BranchOffice::create([
            'city_name' => 'Semarang',
            'contact_addree' => '<p>Jl. Wonodri Baru Raya No.7, Wonodri, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50242&nbsp;</p>',
            'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0611838994296!2d110.430887!3d-7.0020777999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708d00415b0b3d%3A0x1af91bb4f40d7c8e!2sPT.%20Asia%20Persada%20Indonesia!5e0!3m2!1sid!2sid!4v1717695404398!5m2!1sid!2sid',
        ]);

        BranchOffice::create([
            'city_name' => 'Gresik',
            'contact_addree' => '<p>Jl. Raya Boboh, Gantang, Boboh, Kec. Menganti, Kabupaten Gresik, Jawa Timur 61174&nbsp;</p>',
            'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.9121283960317!2d112.56851429999999!3d-7.250841299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78014de06e8fcf%3A0x189f08bd0848a6a7!2sPT.%20Ambulance%20Pintar%20Indonesia%20cabang%20ke-4%2C%20Gresik!5e0!3m2!1sid!2sid!4v1717695473614!5m2!1sid!2sid',
        ]);

        BranchOffice::create([
            'city_name' => 'Makassar',
            'contact_addree' => '<p>Jl. Abdul Rasyid Dg. Lurang No.25-33, Tombolo, Kec. Somba Opu, Kabupaten Gowa, Sulawesi Selatan 92113</p>',
            'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.4154518431797!2d119.46375889999997!3d-5.197205299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3007b6067eb%3A0x98ffe7ab5b615bf2!2sAPI%20GROUP%20Makassar!5e0!3m2!1sid!2sid!4v1717695521445!5m2!1sid!2sid',
        ]);

        CompanyInformation::createMany([
            [
                'name' => 'company-name',
            ],
            [
                'name' => 'address',
            ],
            [
                'name' => 'about',
            ],
            [
                'name' => 'contact-telephone',
            ],
            [
                'name' => 'contact-email',
            ],
            [
                'name' => 'contact-whatsapp',
            ],
            [
                'name' => 'contact-telephone',
            ],
            [
                'name' => 'facebook',
            ],
            [
                'name' => 'youtube1',
            ],
            [
                'name' => 'youtube2',
            ],
        ]);

    }
}
