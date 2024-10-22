<?php

namespace App\Livewire;

use DateTime;
use DateTimeZone;
use Livewire\Component;

class MenuCategories extends Component
{
    public $categories;
    public $stores;
    public $store_id;

    public function mount($categories, $stores, $store_id)
    {
        $this->categories = $categories;
        $this->stores = $stores;
        $this->store_id = $store_id;
    }

    public function isDatePast($selectedDate)
    {
        return new DateTime($selectedDate) < new DateTime();
    }

    public function render()
    {
        return view('livewire.menu-categories');
    }

    public function setStoreId($storeId)
    {
        session()->put('store_id', $storeId);
        session()->forget('pedido');
    }
}
