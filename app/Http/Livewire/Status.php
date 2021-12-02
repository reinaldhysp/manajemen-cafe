<?php

namespace App\Http\Livewire;

use App\Models\Drink;
use App\Models\DrinkOrder;
use App\Models\Food;
use App\Models\FoodOrder;
use App\Models\Service;
use App\Models\Table;
use Livewire\Component;

class Status extends Component
{
    public $pesananMakanan = [];
    public $pesananMinuman = [];
    public $nomorMeja = [];
    public $servisPesanan = [];
    public $semuaMakanan = [];
    public $semuaMinuman = [];

    public function mount()
    {
        $this->pesananMakanan = FoodOrder::all();
        $this->pesananMinuman = DrinkOrder::all();
        $this->nomorMeja = Table::all();
        $this->servisPesanan = Service::all();
        $this->semuaMakanan = Food::all();
        $this->semuaMinuman = Drink::all();
    }

    public function render()
    {
        return view('livewire.status');
    }
}
