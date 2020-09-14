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
            ['id' => Form::TRACK, 'name' => 'Seguimiento'],
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
            ['id' => 12, 'form_id' => Form::TRACK, 'question' => 'Tuvo contacto con personas infectadas con el virus en esta semana?', 'weight' => 1],
            ['id' => 13, 'form_id' => Form::TRACK, 'question' => 'Vive ud. solo(a)?', 'weight' => 1],
            ['id' => 14, 'form_id' => Form::TRACK, 'question' => 'Se encuentra vacunado(a) contra la influenza?', 'weight' => 1],
            ['id' => 15, 'form_id' => Form::TRACK, 'question' => 'Se encuentra vacunado(a) contra el neumococo?', 'weight' => 1],
            ['id' => 16, 'form_id' => Form::TRACK, 'question' => 'Pertenece a algun sistema de salud?', 'weight' => 1],
            ['id' => 17, 'form_id' => Form::TRACK, 'question' => 'Ha presentado tos en esta semana?', 'weight' => 1],
            ['id' => 18, 'form_id' => Form::TRACK, 'question' => 'Ha presentado dificutad para respirar en esta semana?', 'weight' => 1],
            ['id' => 19, 'form_id' => Form::TRACK, 'question' => 'Ha tenido malestar (fiebre, dolor de cuerpo) esta semana?', 'weight' => 1],
        ]);
    }
}
