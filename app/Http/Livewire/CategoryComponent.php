<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryComponent extends Component
{
    public $category;
    public $modalC;
    public function render()
    {
        $this->category = Category::all(); 
        return view('livewire.category-component');
    }
}
