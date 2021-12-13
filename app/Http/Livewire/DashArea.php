<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\area;

class DashArea extends Component
{
    protected $listeners = ['render' => 'render'];

    public function render()
    {
        $area = area::all();
        return view('livewire.dash-area',compact('area'));
    }
}
