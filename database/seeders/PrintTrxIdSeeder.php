<?php

namespace Database\Seeders;

use App\Models\PrintTrxId;
use Illuminate\Database\Seeder;

class PrintTrxIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PrintTrxId::create([
            'trx_id' => '001'
        ]);
    }
}
