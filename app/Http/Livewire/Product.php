<?php

namespace App\Http\Livewire;

use App\Models\Portofolio;
use Livewire\Component;

class Product extends Component
{
    public $limitPerPage = 3;

    protected $listeners = [
        'post-data' => 'postData'
    ];

    public function postData()
    {
        $this->limitPerPage = $this->limitPerPage + 3;
    }

    public function render()
    {
        $portofolio = Portofolio::all();

        return view('livewire.product', ['portofolio' => $portofolio]);
    }
}
