<?php

namespace Database\Seeders;

use App\Models\BusinessAlliance;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BusinessAllianceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BusinessAlliance::factory()->create([
            'name' => 'iCommerce',
            'creation_date' => Carbon::now(),
            'business_goal' => 'Vender para todo Brasil.',
            'responsable_member_id' => 1,
            'user_id' => 1,
            'is_public' => true,
        ]);
    }
}
