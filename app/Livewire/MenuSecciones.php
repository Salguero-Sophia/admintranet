<?php

namespace App\Livewire;

use Livewire\Component;

class MenuSecciones extends Component
{
    public $menu;

    public function render()
    {
        return view('livewire.menu-secciones', [
            'menu' => $this->menu
        ]);
    }
}
