<?php

namespace App\Livewire\Home;

use App\Models\Post;
use Livewire\Component;

class TripleNewsComponent extends Component
{
    public $posts = [];
    public $title = "";
    public function mount()
    {
        $this->posts = Post::outstanding()->public()->limit(3)->get();
    }
    public function render()
    {
        return view('livewire.home.triple-news-component');
    }
}