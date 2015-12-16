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
    {
       DB::table('domains')->insert([
           'title' => 'Cats',
           'text' => "Try to guess what other cat lovers [or haters ;)] like you think about cats purrrr",
           'nbr_clicks' => 0,
           'image' => 'http://dykn.com/wp-content/uploads/2012/07/dailyworldfacts.jpg',
       ]);
       
       DB::table('domains')->insert([
           'title' => 'Dur/Dur',
           'text' => "You know about Dur/Dur? that's amazing! Try to guess what others like you think about it.",
           'nbr_clicks' => 0,
           'image' => 'http://static.greatbigcanvas.com/images/square/alaska-stock/abandoned-farm-wind-blown-durum-wheat-field-saskatchewan-canada,1902423.jpg?max=128',
       ]);
    }
}
