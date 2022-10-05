<?php

namespace App\Http\Livewire\Web\pages;

use Livewire\Component;

class AboutController extends Component
{
    public function render()
    {
        return view('livewire.web.pages.about-controller')->layout('layouts.base');
    }
}
