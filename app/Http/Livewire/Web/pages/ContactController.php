<?php

namespace App\Http\Livewire\Web\Pages;

use Livewire\Component;

class ContactController extends Component
{
    public function render()
    {
        return view('livewire.web.pages.contact-controller')->layout('layouts.base');
    }
}
