<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <button wire:click="incrementar">Incrementar</button>
    <h1>{{ $contador }}</h1>
    <div>
        <ul>
            @foreach($listaItems as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
