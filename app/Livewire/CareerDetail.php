<?php

namespace App\Livewire;

use Livewire\Component;

class CareerDetail extends Component
{

    public $career;

    public $mostrarModal = false;

    public function abrirModal()
    {
        $this->mostrarModal = true;
    }

    public function mount($career)
    {
        $this->career = $career;
    }

    public function render()
    {
        return view('livewire.career-detail');
    }
}
