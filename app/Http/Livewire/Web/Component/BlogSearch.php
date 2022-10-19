<?php

namespace App\Http\Livewire\Web\Component;

use Livewire\Component;
use Domain\Post\Models\Post;

class BlogSearch extends Component
{
    public $postResults;
    public $searchWords;

    public function render()
    {   
        if($this->searchWords){
            $this->postResults = Post::where([['published', true],['title', 'like', '%'.$this->searchWords.'%']])
            ->orWhere([['published', true],['description', 'like', '%'.$this->searchWords.'%']])->get();
        }
        return view('livewire.web.component.blog-search');
    }
}
