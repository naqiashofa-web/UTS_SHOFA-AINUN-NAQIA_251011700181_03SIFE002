<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plants')->insert([
            [
                'name' => 'Monstera Deliciosa',
                'species' => 'Monstera',
                'price' => 150000,
                'description' => 'Tanaman hias populer dengan daun berlubang alami yang estetik untuk ruangan indoor.',
                'image' => 'monstera.jpg',
                'sunlight_requirements' => 'Cahaya tidak langsung (Medium Light)',
            ],
            [
                'name' => 'Lidah Mertua (Sansevieria)',
                'species' => 'Sansevieria',
                'price' => 75000,
                'description' => 'Tanaman pembersih udara yang sangat tangguh dan mudah dalam hal perawatan.',
                'image' => 'sansevieria.jpg',
                'sunlight_requirements' => 'Tahan di segala kondisi cahaya (Low to Bright Light)',
            ],
            [
                'name' => 'Sirih Gading (Scindapsus)',
                'species' => 'Epipremnum aureum',
                'price' => 45000,
                'description' => 'Tanaman merambat yang cocok diletakkan di pot gantung maupun sudut ruangan.',
                'image' => 'sirih_gading.jpg',
                'sunlight_requirements' => 'Cahaya teduh / Indirect sunlight',
            ],
        ]);
    }
}