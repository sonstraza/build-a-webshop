<?php

namespace App\Http\Livewire;

use Illuminate\Http\Response;
use Livewire\Component;

class Product extends Component
{
    public Product $product;
    public function render()
    {
        return view('livewire.product');
    }
}
