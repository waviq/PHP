<?php

// Composer: "fzaninotto/faker": "v1.3.0"


class AuthorsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('authors')->delete();

        $authors = [
            ['name' => 'Waviq subhi'],
            ['name' => 'samsul']

        ];

        DB::table('authors')->insert($authors);
    }

}