<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        Informar Falla
    </x-jet-danger-button>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Informe de Falla en Maquina
        </x-slot>
        <x-slot name="content">
            <div class="container">
                <x-jet-label value="Maquina" />
                <select>
                    @foreach ($maquina as $maquinas)
                        <option value="{{$maquinas->id_maquina}}">{{$maquinas->nombre_maquina}}</option>
                    @endforeach
                </select>
               <x-jet-label value="Area"/>
               <select>
                @foreach ($area as $areas)
                    <option value="{{$areas->id_area}}">{{$areas->nombre_area}}</option>
                @endforeach
            </select>

            <x-jet-label value="Falla"/>
               <select>
                @foreach ($falla as $fallas)
                    <option value="{{$fallas->id_falla}}">{{$fallas->nombre_falla}}</option>
                @endforeach
            </select>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-button wire:click="$set('open',false)">
                Enviar
            </x-jet-button>
            <x-jet-danger-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
