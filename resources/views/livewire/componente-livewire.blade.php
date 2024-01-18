<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <button wire:click="incrementar">Incrementar</button>
    <button wire:click="disminuir">Disminuir</button>
    <h1>{{ $contador }}</h1>
    <div>
        <ul>
            @foreach($listaItems as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
    <div>
        @foreach(['text'=>'Text', 'textarea'=>'Textarea', 'checkbox'=>'Checkbox'] as $type=>$label)
        <button wire:click="listar('{{ $type }}')" class="btn btn-light" data-type="{{ $type }}">
            {{ $label }}
        </button>
        @endforeach
    </div>
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            @foreach($listaBotones as $boton)
            <li class="list-group-item">
                {{ $boton }}
            </li>
            @endforeach
        </ul>
    </div>
</div>
