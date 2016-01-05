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
        DB::table('profile_possible_values')->insert([
            'value' => 'Man',
            'profile_id' => 3,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'Woman',
            'profile_id' => 3,
        ]);

        DB::table('domain_profile')->insert([
            'domain_id' => 1,
            'profile_id' => 3,
            'importance' => 2,
        ]);
        DB::table('domain_profile')->insert([
            'domain_id' => 2,
            'profile_id' => 3,
            'importance' => 1,
        ]);
        DB::table('domain_profile')->insert([
            'domain_id' => 3,
            'profile_id' => 3,
            'importance' => 1,
        ]);
        DB::table('domain_profile')->insert([
            'domain_id' => 4,
            'profile_id' => 3,
            'importance' => 1,
        ]);
        DB::table('domain_profile')->insert([
            'domain_id' => 5,
            'profile_id' => 3,
            'importance' => 1,
        ]);
        DB::table('domain_profile')->insert([
            'domain_id' => 6,
            'profile_id' => 3,
            'importance' => 1,
        ]);


        // Dur-Dur

        /* Profile */
        DB::table('profiles')->insert([
            'designation' => 'Part of the DUR-DUR project?',
            'Question' => "Are you an expert working on the Dur-Dur Project?",
            'infinite' => 0,
        ]);
        // Dur-dur Agro
        DB::table('domain_profile')->insert([
            'domain_id' => 2,
            'profile_id' => 4,
            'importance' => 3,
        ]);
        // Dur-dur Transo
        DB::table('domain_profile')->insert([
            'domain_id' => 3,
            'profile_id' => 4,
            'importance' => 3,
        ]);
        // Dur-dur Socio-economic
        DB::table('domain_profile')->insert([
            'domain_id' => 4,
            'profile_id' => 4,
            'importance' => 3,
        ]);
        // Dur-dur ACV
        DB::table('domain_profile')->insert([
            'domain_id' => 5,
            'profile_id' => 4,
            'importance' => 3,
        ]);
        DB::table('domain_profile')->insert([
            'domain_id' => 6,
            'profile_id' => 4,
            'importance' => 3,
        ]);

        DB::table('profile_possible_values')->insert([
            'value' => 'Yes',
            'profile_id' => 4,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'No',
            'profile_id' => 4,
        ]);

        /* Profile */
        DB::table('profiles')->insert([
            'designation' => 'Area of expertise?',
            'Question' => "What is your area of expertise in the Dur-Dur project?",
            'infinite' => 0,
        ]);
        // Dur-dur Agro
        DB::table('domain_profile')->insert([
            'domain_id' => 2,
            'profile_id' => 5,
            'importance' => 3,
        ]);
        // Dur-dur Transo
        DB::table('domain_profile')->insert([
            'domain_id' => 3,
            'profile_id' => 5,
            'importance' => 3,
        ]);
        // Dur-dur Socio-economic
        DB::table('domain_profile')->insert([
            'domain_id' => 4,
            'profile_id' => 5,
            'importance' => 3,
        ]);
        // Dur-dur ACV
        DB::table('domain_profile')->insert([
            'domain_id' => 5,
            'profile_id' => 5,
            'importance' => 3,
        ]);
        DB::table('domain_profile')->insert([
            'domain_id' => 6,
            'profile_id' => 5,
            'importance' => 3,
        ]);

        DB::table('profile_possible_values')->insert([
            'value' => 'Agronomy',
            'profile_id' => 5,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'Transformation',
            'profile_id' => 5,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'Socio-economic',
            'profile_id' => 5,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'ACV',
            'profile_id' => 5,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'Informatique',
            'profile_id' => 5,
        ]);
        DB::table('profile_possible_values')->insert([
            'value' => 'Aucun',
            'profile_id' => 5,
        ]);

    }
}
