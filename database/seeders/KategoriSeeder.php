<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'kode' => 'UMU',
                'nama' => 'Karya Umum',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode' => 'FIL',
                'nama' => 'Filsafat',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode' => 'AGM',
                'nama' => 'Agama',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode' => 'SOS',
                'nama' => 'Ilmu Sosial',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode' => 'BHS',
                'nama' => 'Bahasa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode' => 'SAI',
                'nama' => 'Ilmu Murni',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode' => 'TEK',
                'nama' => 'Teknologi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode' => 'SNI',
                'nama' => 'Kesenian',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode' => 'SAS',
                'nama' => 'Kesusastraan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'kode' => 'SEJ',
                'nama' => 'Sejarah dan Geografi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        Kategori::insert($kategori);
    }
}
