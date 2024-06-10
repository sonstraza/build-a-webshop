<?php

namespace App\Http\Livewire;

use Illuminate\Http\Response;
use Livewire\Component;

class Product extends Component
{
    public $product;
    public function mount(){}

    public function getProductProperty()
    {
        return Product::findOrFail($this->product->id);
    }

    public function render()
    {
        return view('livewire.product');
    }
}
