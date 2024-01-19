<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
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
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($this->campos as $campo)
                <tr>
                    <td>{{ $campo->id }}</td>
                    <td>{{ $campo->tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
