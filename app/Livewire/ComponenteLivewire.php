<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Campo;

class ComponenteLivewire extends Component
{
    public $campos;

    public function mount()
    {
        $this->campos = Campo::all();
    }

    public function listar($type)
    {
        $campo = new Campo;
        $campo->tipo = $type;
        $campo->save();
        $this->campos = Campo::all();
    }

    public function eliminar($id)
    {
        $campo = Campo::find($id);
        if($campo) {
            $campo->delete();
            $this->campos = Campo::all();
        }
    }

    public function render()
    {
        return view('livewire.componente-livewire');
    }
}
