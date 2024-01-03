<?php

namespace App\Livewire\Ingreso;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class Ingreso extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required',
        'password' => 'required'
    ];

    public function render()
    {
        return view('livewire.ingreso.ingreso');
    }

    public function login(){
        $this->validate();
        $credenciales = ['email' => strtoupper($this->email), 'password' => $this->password];
        $user = Auth::attempt($credenciales);
        if($user){
            return redirect()->route('perfil');
        }else{
            return redirect()->back()->withErrors('Ha ocurrido un problema al iniciar sesion');
        }
        // try {
        //     $user = Auth::attempt($credenciales);
        //     if($user){
        //         return redirect()->route('perfil');
        //     }
        // }catch (Exception $err) {
        //     dd($err->getMessage());
        // }
    }
}
