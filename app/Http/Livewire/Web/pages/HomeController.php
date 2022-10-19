<?php

namespace App\Http\Livewire\Web\pages;

use Domain\Aparence\Models\Aparence;
use Livewire\Component;

use Illuminate\View\View;
use Domain\Post\Models\Post;
use Domain\Team\Models\Team;
use Domain\Service\Models\Service;
use Domain\Portfolio\Models\Portfolio;
use Domain\Enterprise\Models\Enterprise;

class HomeController extends Component
{
    public $Enterprise;
    public $aparence;
    public $Services;
    public $Post;
    public $portfolios;
    public $Team;

    public function mount(Enterprise $enterprise, Service $service, 
                        Post $post, Portfolio $portfolio,Team $team, Aparence $aparence): void
    {
        $this->Aparence = $aparence::where('published', true)->get();
        $this->Enterprise = $enterprise::where('published', true)->first();
        $this->Services = $service::where('published', true)->orderBy('created_at', 'desc')->get();
        $this->Post = $post::with(['category','user'])->where('published', true)->orderBy('created_at', 'desc')->limit(3)->get();
        $this->portfolios = $portfolio::with(['service','gallery'])->where('published', true)->orderBy('created_at', 'desc')->get();
        $this->Team = $team::where('published', true)->orderBy('created_at', 'desc')->get();
    }

    public function render(): View
    {
        return view('livewire.web.pages.home')->layout('layouts.base');
    }
}
