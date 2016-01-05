<?php

use Illuminate\Database\Seeder;

class DomainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { /*
       DB::table('domains')->insert([
           'title' => 'Cats',
           'text' => "Try to guess what other cat lovers [or haters ;)] like you think about cats purrrr",
           'image' => 'http://dykn.com/wp-content/uploads/2012/07/dailyworldfacts.jpg',
       ]);*/

       /*DB::table('domains')->insert([
           'title' => 'Dur/Dur - Agro',
           'text' => "You know about Dur/Dur? that's amazing! Try to guess what others like you think about it.",
           'nbr_clicks' => 0,
           'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
       ]);*/

       DB::table('domains')->insert([
           'title' => 'Dur/Dur - General terms',
           'text' => "You've worked on the Dur-Dur project? Good! Try to guess what other experts like you think about some general concepts of the Dur-Dur project.",
           'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
       ]);

       DB::table('domains')->insert([
           'title' => 'Dur/Dur - Agro',
           'text' => "You've worked on the Dur-Dur project? Good! Try to guess what other experts like you think about concepts perceived by Agronomy experts.",
           'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
       ]);

       DB::table('domains')->insert([
           'title' => 'Dur/Dur - Transformation',
           'text' => "You've worked on the Dur-Dur project? Good! Try to guess what other experts like you think about concepts perceived by Transformation experts.",
           'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
       ]);

       DB::table('domains')->insert([
           'title' => 'Dur/Dur - Socio-economic',
           'text' => "You've worked on the Dur-Dur project? Good! Try to guess what other experts like you think about concepts perceived by Socio-economic experts.",
           'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
       ]);

       DB::table('domains')->insert([
           'title' => 'Dur/Dur - ACV',
           'text' => "You've worked on the Dur-Dur project? Good! Try to guess what other experts like you think about concepts perceived by ACV experts.",
           'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
       ]);
    }
}
