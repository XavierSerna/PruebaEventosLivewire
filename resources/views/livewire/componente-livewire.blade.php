<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="m-4">
        @foreach(['text'=>'Text', 'textarea'=>'Textarea', 'checkbox'=>'Checkbox', 'radio' => 'Radio', 'select' => 'Dropdown', 'number' => 'Number', 'email' => 'Email', 'tel' => 'Phone'] as $type=>$label)
        <button wire:click="listar('{{ $type }}')" class="btn btn-light" data-type="{{ $type }}">
            {{ $label }}
        </button>
        @endforeach
    </div>
    <table class="table table-striped m-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Creado</th>
                <th>Actualizado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($this->campos as $campo)
                <tr>
                    <td>{{ $campo->id }}</td>
                    <td>{{ $campo->tipo }}</td>
                    <td>{{ $campo->created_at }}</td>
                    <td>{{ $campo->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
