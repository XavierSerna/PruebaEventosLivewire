<?php

namespace App\Livewire;

use Livewire\Component;

class ComponenteLivewire extends Component
{
    public $contador = 0;

    public $listaItems = [];

    public function incrementar()
    {
        $this->contador++;
        $this->dispatch('contador-cambiado', $this->contador);
    }

    public function render()
    {
        return view('livewire.componente-livewire');
    }
}
