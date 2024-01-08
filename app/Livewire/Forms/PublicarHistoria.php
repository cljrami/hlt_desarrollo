<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Post;

class PublicarHistoria extends Component
{
    public $categoria_id;
    public $descripcion;
    public $confecion;

    public $categorias;
    public $user_id;

    protected $rules = [
        'categoria_id' => 'required',
        'descripcion' => 'required',
        'confecion' => 'required'
    ];

    public function mount(){
        $this->categorias = Categoria::all();
        $this->user_id = auth()->user()->id;
    }

    public function render()
    {
        return view('livewire.forms.publicar-historia');
    }

    public function create_post(){
        $this->validate();
        Post::create([
            'descripcion' => $this->descripcion,
            'post' => $this->confecion,
            'categoria_id' => $this->categoria_id,
            'user_id' => $this->user_id
        ]);
        return redirect()->route('perfil');
    }

    
}
