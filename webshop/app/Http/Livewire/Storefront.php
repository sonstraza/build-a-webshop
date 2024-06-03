<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Storefront extends Component
{
    public function getProductProperty()
    {
        return Product::query()->get();
    }
    public function render()
    {
        return view('livewire.storefront');
    }
}
