<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reffprodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reffprodi::create(['nama_prodi'=>'Teknik Informatika']);

    }
}
