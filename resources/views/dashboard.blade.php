<x-app-layout>
    <div class="container">
        {{-- @livewire('dash-informe') --}}
        <x-jet-button wire:click="{{ route('area.index') }}">
            Maquina
        </x-jet-button>

        <x-jet-button>
            Falla
        </x-jet-button>
        <a href="{{ route('area.index') }}">
            <x-jet-button>
                Area
            </x-jet-button>
        </a>
    </div>
</x-app-layout>
