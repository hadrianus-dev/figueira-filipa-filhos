<?php

namespace App\Http\Livewire\Web\Component;

use Domain\Enterprise\Models\Enterprise;
use Domain\Post\Models\Post;
use Livewire\Component;

class Footer extends Component
{
    public $Enterprise;
    public $posts;

    public function mount(Enterprise $enterprise, Post $post): void
    {
        $this->Enterprise = $enterprise::where('published', true)->first();
        $this->posts = $post::with(['comment','user'])->where('published', true)->orderBy('created_at', 'desc')->limit(2)->get();
    }

    public function render()
    {
        return view('livewire.web.component.footer');
    }
}
