<?php

namespace Database\Seeders;

use App\Models\AllianceMember;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AllianceMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        AllianceMember::factory()->create([
            'cnpj' => $faker->numerify('#####'),
            'name' =>  'Site Ecommerce',
            'zip_code' => $faker->postcode(),
            'street' => $faker->streetName(),
            'number' => $faker->buildingNumber(),
            'neighborhood' => $faker->streetSuffix(),
            'city' => $faker->city(),
            'state' => $faker->state(),
            'country' => $faker->country(),
            'site' => 'siteecommerce.com',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        AllianceMember::factory()->create([
            'cnpj' => $faker->numerify('#####'),
            'name' =>  'Deposito Central',
            'zip_code' => $faker->postcode(),
            'street' => $faker->streetName(),
            'number' => $faker->buildingNumber(),
            'neighborhood' => $faker->streetSuffix(),
            'city' => $faker->city(),
            'state' => $faker->state(),
            'country' => $faker->country(),
            'site' => 'depositocentral.com',
            'category_id' => 3,
            'user_id' => 1,
        ]);
        AllianceMember::factory()->create([
            'cnpj' => $faker->numerify('#####'),
            'name' =>  'Deposito Interior',
            'zip_code' => $faker->postcode(),
            'street' => $faker->streetName(),
            'number' => $faker->buildingNumber(),
            'neighborhood' => $faker->streetSuffix(),
            'city' => $faker->city(),
            'state' => $faker->state(),
            'country' => $faker->country(),
            'site' => 'depositointerior.com',
            'category_id' => 3,
            'user_id' => 1,
        ]);
        AllianceMember::factory()->create([
            'cnpj' => $faker->numerify('#####'),
            'name' =>  'Transportadora Federal',
            'zip_code' => $faker->postcode(),
            'street' => $faker->streetName(),
            'number' => $faker->buildingNumber(),
            'neighborhood' => $faker->streetSuffix(),
            'city' => $faker->city(),
            'state' => $faker->state(),
            'country' => $faker->country(),
            'site' => 'transportadoralnacional.com',
            'category_id' => 2,
            'user_id' => 1,
        ]);
        AllianceMember::factory()->create([
            'cnpj' => $faker->numerify('#####'),
            'name' =>  'Correios',
            'zip_code' => $faker->postcode(),
            'street' => $faker->streetName(),
            'number' => $faker->buildingNumber(),
            'neighborhood' => $faker->streetSuffix(),
            'city' => $faker->city(),
            'state' => $faker->state(),
            'country' => $faker->country(),
            'site' => 'correios.com.br',
            'category_id' => 2,
            'user_id' => 1,
        ]);
    }
}
