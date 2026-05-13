<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert a record into company_infos table
        DB::table('company_infos')->insert([
            'id' => 1,
            'name' => 'Agrasi Hela Osu (pvt) Ltd',
            'address' => 'Mahiyanganaya.',
            'phone' => '0771376829',
            'phone2' => '0778453176, 0762372676',
            'email' => '',
            'website' => '',
            'logo' => '/images/jaan_logo.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
