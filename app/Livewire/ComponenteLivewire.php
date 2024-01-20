<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Campo;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Log;

class ComponenteLivewire extends Component
{
    public $campos;

    public function mount()
    {
        $this->campos = Campo::all();
    }

    #[On('elementoArrastrado')]
    public function manejarElementoArrastrado($tipo)
    {
        Log::info('addField recibido con el valor: ' . $tipo);
        $campo = new Campo;
        $campo->tipo = $tipo;
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
