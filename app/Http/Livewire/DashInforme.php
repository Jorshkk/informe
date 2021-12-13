<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Maquina;
use App\Models\area;
use App\Models\tipo_falla;
use App\Models\Falla;

class DashInforme extends Component
{
    public $open = false;
    public $nombre_falla,$nombre_area,$nombre_maquina;
    public function save(){
       
    }
    public function render()
    {
        $maquina = Maquina::all();
        $area = Area::all();
        $falla = tipo_falla::all();
        return view('livewire.dash-informe',compact('maquina','area','falla'));
    }
}
