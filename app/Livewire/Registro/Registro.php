<?php

namespace App\Livewire\Registro;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Registro extends Component
{
    public $pseudonimo;
    public $fecha_nacimiento;
    public $email;
    public $password;
    public $repassword;

    protected $rules = [
        'pseudonimo' => 'required|min:4|max:15',
        'fecha_nacimiento' => 'required',
        'email' => 'required|min:12|max:50',
        'password' => 'required|min:8|max:15'
    ];

    public function render()
    {
        return view('livewire.registro.registro');
    }

    public function login(){
        try{
            $this->validate();
            User::create([
                'name' => strtoupper($this->pseudonimo),
                'fecha_nacimiento' => $this->fecha_nacimiento,
                'email' => strtoupper($this->email),
                'password' => Hash::make($this->password)
            ]);
            return redirect()->route('ingreso');
        }catch(Exception $error){
            dd($error);
        }
    }
}
