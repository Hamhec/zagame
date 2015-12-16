<?php

use Illuminate\Database\Seeder;

class ConceptsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      // Cats domain
      //  --> cat
      DB::table('concepts')->insert([
       'name' => 'Cat',
       'description' => 'a cat.',
       'image' => 'http://rack.1.mshcdn.com/media/ZgkyMDEyLzEyLzA0L2QwL2NhdC5jNEEKcAl0aHVtYgkxNTB4MTUwIwplCWpwZw/4d610ee3/6a7/cat.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 1,
          'concept_id' => 1,
      ]);
      //  --> cat food
      DB::table('concepts')->insert([
       'name' => 'Cat Food',
       'description' => 'The food that is specifically made for cats.',
       'image' => 'https://nodogaboutit.files.wordpress.com/2010/10/j0430956.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 1,
          'concept_id' => 2,
      ]);

      //  --> Siamese Cat Breed
      DB::table('concepts')->insert([
       'name' => 'Siamese Cat Breed',
       'description' => 'a kind of cat.',
       'image' => 'https://i.ytimg.com/vi/1QtWKHogLxQ/hqdefault.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 1,
          'concept_id' => 3,
      ]);

      //  --> Cat Owner
      DB::table('concepts')->insert([
       'name' => 'Cat owner',
       'description' => 'A person who owns a cat.',
       'image' => 'http://dykn.com/wp-content/uploads/2012/07/dailyworldfacts.jpg',
      ]);
      DB::table('concept_domain')->insert([
          'domain_id' => 1,
          'concept_id' => 4,
      ]);
    }
}
