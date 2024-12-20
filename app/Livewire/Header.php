<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Header extends Component
{
    public $categories = [];
    public $display_banner = true;
    public function mount()
    {
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.header');
    }
}