<?php

namespace App\Livewire;

use Livewire\Component;

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
    }

    public function render()
    {
        return view('livewire.componente-livewire');
    }
}
