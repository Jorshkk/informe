<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        Area
    </x-jet-danger-button>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Ingresar Area
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre Area" />
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre_area"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-button wire:click="save()">
                Registrar
            </x-jet-button>
            <x-jet-danger-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
