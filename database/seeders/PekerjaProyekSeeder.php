<?php

namespace Database\Seeders;

use App\Models\PekerjaProyek;
use Illuminate\Database\Seeder;

class PekerjaProyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PekerjaProyek::factory(5)->create();
    }
}
