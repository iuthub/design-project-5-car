<?php

use Illuminate\Database\Seeder;

class FileCarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\File::class, 200)->create()->each(function($file){
            $file->save();
        });
    }
}
