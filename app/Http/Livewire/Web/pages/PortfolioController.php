<?php

namespace App\Http\Livewire\Web\Pages;

use Domain\Gallery\Models\Gallery;
use Domain\Portfolio\Models\Portfolio;
use Livewire\Component;

class PortfolioController extends Component
{
    public $portfolios;
    public $gallery;
    
    public function mount(Portfolio $portfolio, Gallery $gallery): void
    {
        $this->portfolios = $portfolio::with(['service','gallery'])->where('published', true)->orderBy('created_at', 'desc')->get();
        $this->gallery = $gallery::with(['portfolio'])->where('published', true)->get();
        #dd($this->gallery[3]['portfolio_id']);
        #dd($this->portfolios[0]->gallery()->first()['cover']);
    }

    public function render()
    {
        return view('livewire.web.pages.portfolio-controller')->layout('layouts.base');
    }
}
