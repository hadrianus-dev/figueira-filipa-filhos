<?php

namespace App\Http\Livewire\Web\pages;

use Illuminate\View\View;
use Livewire\Component;

class HomeController extends Component
{
    public function render(): View
    {
        return view('livewire.web.pages.home')->layout('layouts.base');
    }
}
