<?php

namespace App\Livewire;

use Livewire\Component;

class CareerForm extends Component
{
    public $career;

    public $cerrarModal;


    public function mount($career, $cerrarModal)
    {
        $this->career = $career;
        $this->cerrarModal = $cerrarModal;
    }

    public function render()
    {
        return view('livewire.career-form');
    }

    public function cerrarModal()
    {
        // $this->cerrarModal();
        CareerDetail::cerrarModal();
    }
}
