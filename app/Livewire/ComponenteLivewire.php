<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Campo;

class ComponenteLivewire extends Component
{
    public $listaBotones = [];
    public $campos;

    public function mount()
    {
        $this->campos = Campo::all();
    }

    public function listar($type)
    {
        $this->listaBotones[] = $type;
        $campo = new Campo;
        $campo->tipo = $type;
        $campo->save();
        $this->campos = Campo::all();
    }

    public function getCamposProperty()
    {
        return Campo::all();
    }

    public function render()
    {
        return view('livewire.componente-livewire');
    }
}
