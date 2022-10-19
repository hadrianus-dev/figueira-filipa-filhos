<?php

namespace App\Http\Livewire\Web\Pages;

use Livewire\Component;
use Domain\Post\Models\Post;
use Artesaos\SEOTools\Facades\SEOMeta;
use Domain\Enterprise\Models\Enterprise;

class BlogController extends Component
{
    public $Post;
    public $Enterprise;
    
    public function mount(Post $post, Enterprise $enterprise): void
    {
        $this->Enterprise = $enterprise::where('published', true)->first();
        $this->Post = $post::with(['category','user'])->where('published', true)->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        SEOMeta::setTitle('Notícias');
        SEOMeta::setDescription('Confira aqui todas as notícias, da FFF para todos os cantos do mundo.');
        SEOMeta::addKeyword(['Notícias', 'Novidades', 'Egoli News', 'Egoli']);
        
        foreach($this->Post as $post){
            SEOMeta::setTitle($post->title);
            SEOMeta::setDescription($post->body);
            SEOMeta::addMeta('article:published_time', $post->created_at->toW3CString(), 'property');
            SEOMeta::addMeta('article:section', $post->category->tile, 'property');
            SEOMeta::addKeyword(['Notícias', 'Novidades', 'Egoli News', 'Egoli']);
        }
        return view('livewire.web.pages.bog-controller')->layout('layouts.base');
    }
}
