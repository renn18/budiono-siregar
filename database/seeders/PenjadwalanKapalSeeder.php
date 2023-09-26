<?php

namespace Database\Seeders;
use App\Models\PenjadwalanKapal;
use App\Models\PenjadwalanModel;
use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjadwalanKapalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jadwals = [
            [
                'id_kapal' => 1,
                'nama_kapal' => 'MT. Triaksa 17',
                'tanggal_tiba' => '2023-08-09',
                'tiba_dari' => 'awokawok',
                'posisi_tambat' => 'wkkwkw',
                'tujuan' => 'KKN',
                'tanggal_rencana_berangkat' => '2023-09-28',
            ],
            [
                'id_kapal' => 2,
                'nama_kapal' => 'MT. Sky Blue',
                'tanggal_tiba' => '2023-08-10',
                'tiba_dari' => 'sipp',
                'posisi_tambat' => 'pinggiran jalan',
                'tujuan' => 'KKN Tematik',
                'tanggal_rencana_berangkat' => '2023-10-28',
            ],
            [
                'id_kapal' => 3,
                'nama_kapal' => 'MT. Triaksa 17',
                'tanggal_tiba' => '2023-08-09',
                'tiba_dari' => 'awokawok',
                'posisi_tambat' => 'wkkwkw',
                'tujuan' => 'KKN',
                'tanggal_rencana_berangkat' => '2023-09-28',
            ],
            [
                'id_kapal' => 4,
                'nama_kapal' => 'MT. Sky Blue',
                'tanggal_tiba' => '2023-08-10',
                'tiba_dari' => 'sipp',
                'posisi_tambat' => 'pinggiran jalan',
                'tujuan' => 'KKN Tematik',
                'tanggal_rencana_berangkat' => '2023-10-28',
            ],
            [
                'id_kapal' => 5,
                'nama_kapal' => 'MT. Triaksa 17',
                'tanggal_tiba' => '2023-08-09',
                'tiba_dari' => 'awokawok',
                'posisi_tambat' => 'wkkwkw',
                'tujuan' => 'KKN',
                'tanggal_rencana_berangkat' => '2023-09-28',
            ],
            [
                'id_kapal' => 6,
                'nama_kapal' => 'MT. Sky Blue',
                'tanggal_tiba' => '2023-08-10',
                'tiba_dari' => 'sipp',
                'posisi_tambat' => 'pinggiran jalan',
                'tujuan' => 'KKN Tematik',
                'tanggal_rencana_berangkat' => '2023-10-28',
            ],
            [
                'id_kapal' => 7,
                'nama_kapal' => 'MT. Triaksa 17',
                'tanggal_tiba' => '2023-08-09',
                'tiba_dari' => 'awokawok',
                'posisi_tambat' => 'wkkwkw',
                'tujuan' => 'KKN',
                'tanggal_rencana_berangkat' => '2023-09-28',
            ],
            [
                'id_kapal' => 8,
                'nama_kapal' => 'MT. Sky Blue',
                'tanggal_tiba' => '2023-08-10',
                'tiba_dari' => 'sipp',
                'posisi_tambat' => 'pinggiran jalan',
                'tujuan' => 'KKN Tematik',
                'tanggal_rencana_berangkat' => '2023-10-28',
            ],
            [
                'id_kapal' => 9,
                'nama_kapal' => 'MT. Triaksa 17',
                'tanggal_tiba' => '2023-08-09',
                'tiba_dari' => 'awokawok',
                'posisi_tambat' => 'wkkwkw',
                'tujuan' => 'KKN',
                'tanggal_rencana_berangkat' => '2023-09-28',
            ],
            [
                'id_kapal' => 10,
                'nama_kapal' => 'MT. Sky Blue',
                'tanggal_tiba' => '2023-08-10',
                'tiba_dari' => 'sipp',
                'posisi_tambat' => 'pinggiran jalan',
                'tujuan' => 'KKN Tematik',
                'tanggal_rencana_berangkat' => '2023-10-28',
            ],
            [
                'id_kapal' => 11,
                'nama_kapal' => 'MT. Triaksa 17',
                'tanggal_tiba' => '2023-08-09',
                'tiba_dari' => 'awokawok',
                'posisi_tambat' => 'wkkwkw',
                'tujuan' => 'KKN',
                'tanggal_rencana_berangkat' => '2023-09-28',
            ],
            [
                'id_kapal' => 12,
                'nama_kapal' => 'MT. Sky Blue',
                'tanggal_tiba' => '2023-08-10',
                'tiba_dari' => 'sipp',
                'posisi_tambat' => 'pinggiran jalan',
                'tujuan' => 'KKN Tematik',
                'tanggal_rencana_berangkat' => '2023-10-28',
            ],
        ];

        foreach ($jadwals as $jadwal){
            Schedule::create($jadwal);
        }
    }
}
