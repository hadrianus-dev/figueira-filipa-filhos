<?php

namespace App\Http\Livewire\Web\Pages;

use Livewire\Component;

class PortfolioController extends Component
{
    public function render()
    {
        return view('livewire.web.pages.portfolio-controller')->layout('layouts.base');
    }
}
