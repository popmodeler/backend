<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\InternalCollaboration;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Gabriel',
            'email' => 'bielsmi03@gmail.com',
            'password' => Hash::make(123456),
        ]);
        $this->call(CategoryTableSeeder::class);
        $this->call(AllianceMemberTableSeeder::class);
        $this->call(BusinessAllianceTableSeeder::class);
        $this->call(InternalCollaborationTableSeeder::class);
    }
}
