<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artist = Artist::query()->get();
        foreach ($artist as $artist) {
           $count = fake()->numberBetween(1, 18);
           Song::factory()->count($count)->create([
            'artist_id' => $artist->id,
           ]);
        }
    }
}
