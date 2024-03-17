<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Testing\Fakes\Fake;

// bo sung them
use Faker\Factory as Faker;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Khoi tao doi tuong Faker
        $faker = Faker::create();
        // chay vong lap xd so ban ghi & kieu du lieu can tao
        for ($i = 0; $i < 50; $i++) {
            Post::create([
                'title' => $faker->sentence(6, true),
                'body' => $faker->paragraphs(3, true)
            ]);
        }
    }
}
