<?php

namespace App\Livewire;

use Livewire\Component;

class ShowProduct extends Component
{
    public $product;
    public $modifiers;
    public $modifiersToShow;
    public $options;
    public $quantity = 1;
    public $categoryNavigate;
    public $selectedCategory = 'all';

    public function mount($product, $modifiers, $options, $modifiersToShow)
    {
        $this->product   = $product;
        $this->modifiers = $modifiers;
        $this->options   = $options;
        $this->modifiersToShow   = $modifiersToShow;
    }

    public function incrementQuantity()
    {
        $this->quantity += 1;
    }

    public function decrementQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity -= 1;
        }
    }

    public function searchModifiers($modifierCode)
    {
        $ids_a_buscar = explode("|", $modifierCode);
        $modifiers = array_filter($this->modifiers, function($modifier) use ($ids_a_buscar) {
            return in_array($modifier->id, $ids_a_buscar);
        });
        
        $modifierRest = array_filter($this->modifiers, function($e) {
            return $e->typeModifier !== 2;
        });

        // array_push($modifiers, $modifierRest);

        $this->modifiersToShow = array_merge($modifiers, $modifierRest);

    }

    public function render()
    {
        foreach ($this->product->categories as $category) {

            if ($category->level == 2) {
                $this->categoryNavigate = $category->code;
            } elseif ($category->level == 3) {
                $this->selectedCategory = $category->code;
            } else {

                $key = array_search(2, array_column($this->product->categories, 'level'));
                $this->selectedCategory = ($this->selectedCategory) ? $this->selectedCategory :   $this->product->categories[$key]->code;
            }
        }

        return view('livewire.show-product');
    }
}
