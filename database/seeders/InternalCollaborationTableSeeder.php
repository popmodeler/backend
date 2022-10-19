<?php

namespace Database\Seeders;

use App\Models\InternalCollaboration;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InternalCollaborationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InternalCollaboration::factory()->create([
            'alliance_member_id' => 2,
            'business_alliance_id' => 1,
            'entry_date' => Carbon::now(),
            'relationship' => 'merge',
        ]);
        InternalCollaboration::factory()->create([
            'alliance_member_id' => 3,
            'business_alliance_id' => 1,
            'entry_date' => Carbon::now(),
            'relationship' => 'merge',
        ]);
        InternalCollaboration::factory()->create([
            'alliance_member_id' => 4,
            'business_alliance_id' => 1,
            'entry_date' => Carbon::now(),
            'relationship' => 'acquisition',
        ]);
        InternalCollaboration::factory()->create([
            'alliance_member_id' => 5,
            'business_alliance_id' => 1,
            'entry_date' => Carbon::now(),
            'relationship' => 'partnership',
        ]);
    }
}
