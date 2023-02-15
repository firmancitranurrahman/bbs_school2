<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use App\Models\Reffkota;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 30; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('reffkotas')->insert([
    			'nama_kota' => $faker->city,
    		]);
        }
    }
}
