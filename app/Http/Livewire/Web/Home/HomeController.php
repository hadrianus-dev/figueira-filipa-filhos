<?php

namespace App\Http\Livewire\Web\Home;

use Illuminate\View\View;
use Livewire\Component;

class HomeController extends Component
{
    public function render(): View
    {
        return view('livewire.web.home.home')->layout('layouts.base');
    }
}
