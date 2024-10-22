<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Product;


class ListProductsBackend extends Component
{
    use WithPagination;

    public $query = '';

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = Product::where('postItem_id', 'like', '%' . $this->query . '%')
            ->orderBy('id', 'desc')->paginate(10);

        return view('livewire.list-products-backend', [
            "products" => $products
        ]);
    }
}
