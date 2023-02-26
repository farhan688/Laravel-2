<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    Mahasiswa::insert ([
    //         'name'=> 'Ronaldo',
    //         'npm' => '201761394',
    //         'created_at' => Carbon::now(),
    //         'updated_at' => Carbon::now()
    //    ]);

        Mahasiswa::factory()->count(50)->create();
    }
}

