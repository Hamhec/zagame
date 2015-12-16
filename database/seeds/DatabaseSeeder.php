<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(DomainsSeeder::class);
        $this->call(ProfilesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ConceptsSeeder::class);

        Model::reguard();
    }
}
