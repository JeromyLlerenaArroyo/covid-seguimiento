<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Patient;
use App\Form;
use App\Submission;
use DB;

class PatientController extends Controller
{
    public function index()
    {
    	$data = [
    		'patients' => Patient::all(),
    		'route' => 'Pacientes'
    	];

    	return view('admin.patients.index', $data);
    }

    public function track(Patient $patient)
    {
    	$data = [
            'route' => 'Seguimientos',
            'tracks' => $patient->submissions()->whereHas('detail', function($query){
                            $query->where('form_id', Form::TRACK);
                        })->where('check', 1)
                          ->groupBy('created_at')->select(DB::raw('date(created_at) as date, count(*) as count'))->get(),
            'patient' => $patient,
        ];

        return view('admin.patients.track', $data);
    }

    public function showNewTrack(Patient $patient)
    {
        if (Submission::where('date', now()->toDateString())->count()) {
            return redirect()->back()->with('error', 'Solo puede hacer un seguimiento al día para este paciente.');
        }

        $data = [
            'route' => 'Seguimiento / Nuevo',
            'patient' => $patient,
            'form_mode' => MODE_NEW,
            'details' => Form::find(Form::TRACK)->details,
        ];

        return view('admin.patients.new-track', $data);
    }

    public function newTrack(Patient $patient, Request $request)
    {
        $data = request()->all();

        $details = Form::find(Form::TRACK)->details;

        foreach ($details as $detail) {
            Submission::create([
                'detail_id' => $detail->id,
                'check' => $data[$detail->id],
                'date' => now()->toDateString(),
                'patient_id' => $patient->id,
                'user_id' => auth()->user()->id,
            ]);
        }

        return redirect()->route('admin.patients.track', $patient);
    }
}
