<?php

namespace Database\Seeders;

use App\Models\KapalModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KapalModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ships = [
            [
                'nama_kapal' => 'MT. Triaksa 17',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 90,
                'gt' => 2908,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MT. Sky Blue',
                'keagenan' => 'PT. Fajar Sribahari Sakti',
                'loa' => 129,
                'gt' => 8686,
                'pemilik' => 0,
                'bendera' => 'Korea',
            ],
            [
                'nama_kapal' => 'MV. Oceanic Success',
                'keagenan' => 'PT. Sanindo Antar Nusa',
                'loa' => 110,
                'gt' => 6943,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MT. Brilliant 8899',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 105,
                'gt' => 4731,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'KM. Berau Mas',
                'keagenan' => 'PT. Temas Shipping',
                'loa' => 86,
                'gt' => 2003,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'KM. Sahabat Sejati 8',
                'keagenan' => 'PT. Panah Sakti',
                'loa' => 89,
                'gt' => 3208,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MV. Sawah Lunto',
                'keagenan' => 'PT. Fajar Sribahari Sakti',
                'loa' => 110,
                'gt' => 6943,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MT. Aerosea Catalina',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 100,
                'gt' => 5153,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MV. Oceanic Success',
                'keagenan' => 'PT. Sanindo Antar Nusa',
                'loa' => 110,
                'gt' => 6943,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MT. Triaksa 17',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 90,
                'gt' => 2908,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'KM. Illannur',
                'keagenan' => 'PT. Panah Sakti',
                'loa' => 86,
                'gt' => 2528,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MV. Glorious Jupiter',
                'keagenan' => 'PT. Bahtera Adhiguna',
                'loa' => 157,
                'gt' => 16088,
                'pemilik' => 0,
                'bendera' => 'Panama',
            ],
        ];

        foreach ($ships as $ship) {
            KapalModel::create($ship);
        }
    }
}
