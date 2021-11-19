<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'diagnosis' => ['required', 'string', 'max:255', 'unique:users'],
            'blood_presure' => ['required', 'string', 'max:255'],
            'pulse_rate' => ['required', 'string', 'max:255'],
            'respiratory_rate' => ['required', 'string', 'max:255'],
            'other' => ['required', 'string', 'max:255'],
            'investigation' => ['required', 'string', 'max:255'],
            'treatments' => ['required', 'string', 'max:255'],
            'special_notes' => ['required', 'string', 'max:255'],
           
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'diagnosis' => $data['diagnosis'],
            'blood_presure' => $data['blood_presure'],
            'pulse_rate' => $data['pulse_rate'],
            'respiratory_rate' => $data['respiratory_rate'],
            'other' => $data['other'],
            'investigation' => $data['investigation'],
            'treatments' => $data['treatments'],
            'special_notes' => $data['special_notes'],
   

        ]);
    }






    public function index()
    {
        
        return view('patients.index');
    }

}
