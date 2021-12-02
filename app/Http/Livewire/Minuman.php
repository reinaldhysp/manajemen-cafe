<?php

namespace App\Http\Livewire;

use App\Models\Drink;
use Livewire\Component;

class Minuman extends Component
{
    public $semuaMinuman = [];
    public $pesananMinuman = [];

    public function mount()
    {
        $this->semuaMinuman = Drink::all();
        $this->pesananMinuman = [
            ['minuman_dipesan' => '','porsi_minuman' => 1]
        ];
    }

    public function hapusMinuman($index)
    {
        unset($this->pesananMinuman[$index]);
        $this->pesananMinuman = array_values($this->pesananMinuman);
    }

    public function tambahMinuman()
    {
        $this->pesananMinuman[] = ['minuman_dipesan' => '','porsi_minuman' => 1];
    }

    public function render()
    {
        return view('livewire.minuman');
    }
}
