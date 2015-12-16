<?php

use Illuminate\Database\Seeder;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Cat alergies? */
        DB::table('profiles')->insert([
            'designation' => 'Cat alergies?',
            'Question' => "Do you have an alergie from cats or cat related products?",
            'infinite' => 0,
        ]);
        DB::table('domain_profile')->insert([
            'domain_id' => 1,
            'profile_id' => 1,
            'importance' => 1,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'Yes',
            'profile_id' => 1,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'No',
            'profile_id' => 1,
        ]);

        /* Own a cat? */
        DB::table('profiles')->insert([
            'designation' => 'Own a Cat?',
            'Question' => "Do you have at home? whether its yours or not.",
            'infinite' => 0,
        ]);
        DB::table('domain_profile')->insert([
            'domain_id' => 1,
            'profile_id' => 2,
            'importance' => 1,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'Yes!',
            'profile_id' => 2,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'No',
            'profile_id' => 2,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'Yes, but I wish I didnt',
            'profile_id' => 2,
        ]);

        /* Male or femail */
        DB::table('profiles')->insert([
            'designation' => 'Gender?',
            'Question' => "Are you a man or a woman?",
            'infinite' => 0,
        ]);
        DB::table('domain_profile')->insert([
            'domain_id' => 1,
            'profile_id' => 3,
            'importance' => 2,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'Man',
            'profile_id' => 3,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'Woman',
            'profile_id' => 3,
        ]);
    }
}
