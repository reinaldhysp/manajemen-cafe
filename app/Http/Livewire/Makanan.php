<?php

namespace App\Http\Livewire;

use App\Models\Food;
use App\Models\Service;
use App\Models\Table;
use Livewire\Component;

class Makanan extends Component
{
    public $nomorMeja = [];
    public $servisPesanan = [];
    public $semuaMakanan = [];
    public $pesananMakanan = [];

    public function mount()
    {
        $this->nomorMeja = Table::all();
        $this->servisPesanan = Service::all();
        $this->semuaMakanan = Food::all();
        $this->pesananMakanan = [
            ['makanan_dipesan' => '','porsi_makanan' => 1]
        ];
    }

    public function hapusPesanan($index)
    {
        unset($this->pesananMakanan[$index]);
        $this->pesananMakanan = array_values($this->pesananMakanan);
    }

    public function tambahPesanan()
    {
        $this->pesananMakanan[] = ['makanan_dipesan' => '','porsi_makanan' => 1];
    }

    public function render()
    {
        return view('livewire.makanan');
    }
}
