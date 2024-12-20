<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Form;
class RightSideMenu extends Component
{
    public function render()
    {
        $count = count(Form::notRead()->get());
        return view('livewire.right-side-menu', compact('count'));
    }
}