<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Campo;

class ComponenteLivewire extends Component
{
    public $contador = 0;
    public $listaItems = [];
    public $listaBotones = [];

    public function incrementar()
    {
        $this->contador++;
        $this->listaItems[] = $this->contador;
        $this->dispatch('contador-cambiado', $this->contador);
    }

    public function disminuir()
    {
        $this->contador--;
        $this->listaItems[] = $this->contador;
        $this->dispatch('contador-cambiado', $this->contador);
    }

    public function listar($type)
    {
        $this->listaBotones[] = $type;
        $campo = new Campo;
        $campo->tipo = $type;
        $campo->save();
    }

    public function render()
    {
        return view('livewire.componente-livewire');
    }
}
