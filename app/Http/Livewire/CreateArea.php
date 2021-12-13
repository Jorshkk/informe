<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\area;

class CreateArea extends Component
{
    public $open = false;
    public $nombre_area;

    public function save(){
        Area::create([
            'nombre_area' => $this->nombre_area         
        ]);
        $this->emit('alert');
        $this->reset(['open','nombre_area']);
        $this->emit('render');
    }
    public function render()
    {
        return view('livewire.create-area');
    }
}
