<?php

use Illuminate\Database\Seeder;

class FormTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Form::class, 200)->create()->each(function($form){
            $form->save();
        });
    }
}
