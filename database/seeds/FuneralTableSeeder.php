<?php

use Illuminate\Database\Seeder;

class FuneralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('funerals')->delete();

      $funerals = array(
          array(
              'title' => 'Maarten',
              'commentary' => 'maartendejager@gmail.com',
              'quote' => '',
              'ceremony' => '',
              'burial_type' => '',
              'location' => '',
              'casket' => '',
              'song_name' => '',
              'song_id' => '',
              'song_link' => '',
              'picture_id' => '',
              'picture_link' => '',
              'picture_alt' => '',
          )
      );

      DB::table('funerals')->insert($funerals);
    }
}
