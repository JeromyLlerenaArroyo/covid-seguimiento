<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form;
use App\Detail;
use App\Submission;
use App\Person;
use App\Patient;
use App\Category;

class FormController extends Controller
{
    public function getHomeForm()
    {
    	return response()->json(Form::find(Form::HOME)->details);
    }

    public function submitHomeForm()
    {
    	$data = request()->all();
    	$total = 0;
    	$submission_ids = [];

    	foreach ($data['details'] as $detail_id => $value) {
    		$total += Detail::find($detail_id)->weight * $value;

    		$submission = Submission::create([
    			'detail_id' => $detail_id,
    			'check' => $value,
    			'date' => now()->toDateString(),
    			'patient_id' => null,
    			'user_id' => null,
    		]);

    		$submission_ids[] = $submission->id;
    	}

    	$total = $total / count($data);

    	$suspect = ($total >= 7.5);

    	return response()->json(['suspect' => $suspect, 'token' => encrypt($submission_ids)], 200);
    }

    public function submitPersonalForm()
    {
        $data = request()->all();

        $person = Person::create([
            'firt_name' => request('firt_name'),
            'last_name' => request('last_name'),
            'dni' => request('dni'),
            'birth_date' => request('birth_date'),
            'sex' => request('sex'),
            'phone_number' => request('phone_number'),
        ]);

        $patient = Patient::create([
            'person_id' => $person->id,
            'category_id' => Category::SUSPECT,
            'email' => request('email'),
        ]);

        $detail_ids = decrypt(request('token'));

        Submission::whereIn('id', $detail_ids)->update([
            'patient_id' => $patient->id,
        ]);

        return response()->json(null, 200);
    }
}
