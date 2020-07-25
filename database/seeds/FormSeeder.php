<?php

use Illuminate\Database\Seeder;
use App\Form;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forms')->insert([
        	['id' => Form::HOME, 'name' => 'Despistaje'],
        ]);

        DB::table('details')->insert([
        	['id' => 1, 'form_id' => Form::HOME, 'question' => 'Fiebre', 'weight' => 1],
        	['id' => 2, 'form_id' => Form::HOME, 'question' => 'Tos seca', 'weight' => 1],
        	['id' => 3, 'form_id' => Form::HOME, 'question' => 'Cansansio', 'weight' => 1],
        	['id' => 4, 'form_id' => Form::HOME, 'question' => 'Molestias y dolores', 'weight' => 1],
        	['id' => 5, 'form_id' => Form::HOME, 'question' => 'Dolor de garganta', 'weight' => 1],
        	['id' => 6, 'form_id' => Form::HOME, 'question' => 'Diarrea', 'weight' => 1],
        	['id' => 7, 'form_id' => Form::HOME, 'question' => 'Conjuntivitis', 'weight' => 1],
        	['id' => 8, 'form_id' => Form::HOME, 'question' => 'Dolor de cabeza', 'weight' => 1],
        	['id' => 9, 'form_id' => Form::HOME, 'question' => 'Pérdida del olfato o gusto', 'weight' => 1],
        	['id' => 10, 'form_id' => Form::HOME, 'question' => 'Erupciones cutáneas', 'weight' => 1],
        	['id' => 11, 'form_id' => Form::HOME, 'question' => 'Pérdida de color de los dedos de las manos o de los pies', 'weight' => 1],
        ]);
    }
}
