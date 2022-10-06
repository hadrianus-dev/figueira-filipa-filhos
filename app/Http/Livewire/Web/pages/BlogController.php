<?php

namespace App\Http\Livewire\Web\Pages;

use Livewire\Component;
use Domain\Post\Models\Post;

class BlogController extends Component
{
    public $Post;
    
    public function mount(Post $post): void
    {
        $this->Post = $post::with(['category','user'])->where('published', true)->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.web.pages.bog-controller')->layout('layouts.base');
    }
}
