<?php

namespace Database\Seeders;

use App\Moat;
use App\Models\Artist;
use App\Models\Album;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Artists
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

        // Albums
       $albums = [
           ['Justice',2021,1],
           ['Purpose',2015,1],
           ['Changes',2020,1],
           ['The 20/20 Experience',2013,7],
           ['Man of the Woods',2018,7],
           ['Mr. Timberlake',2008,7],
           ['J.Lo',2001,12],
           ['Bangerz',2013,13]
       ];
        if(is_array($albums)):
            foreach ($albums as $album):
                if(is_object($artist)):
                    $newArtist = new Album();
                    $newArtist->name = $album[0];
                    $newArtist->year = $album[1];
                    $newArtist->artist_id = $album[2];
                    $newArtist->save();
                endif;
            endforeach;
        endif;

        // Roles and permissions
        Role::create(['name' => 'user']);
        Permission::create(['name' => 'delete albums'])->assignRole(Role::create(['name' => 'admin']));
    }
}
