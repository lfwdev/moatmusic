<?php

namespace Database\Seeders;

use App\Moat;
use App\Models\Artist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $artists = (new Moat\Artists())->getArtists();
        if(is_array($artists)):
            foreach ($artists as $artist):
                if(is_object($artist)):
                    $newArtist = new Artist();
                    $newArtist->id = $artist->id;
                    $newArtist->name = $artist->name;
                    $newArtist->twitter = $artist->twitter;
                    $newArtist->save();
                endif;
            endforeach;
        endif;
    }
}
