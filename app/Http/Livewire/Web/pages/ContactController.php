<?php

namespace App\Http\Livewire\Web\Pages;

use Livewire\Component;
use Domain\Enterprise\Models\Enterprise;

class ContactController extends Component
{
    public $Enterprise;
    
    public function mount(Enterprise $enterprise): void
    {
        $this->Enterprise = $enterprise::where('published', true)->first();
    }

    public function render()
    {
        return view('livewire.web.pages.contact-controller')->layout('layouts.base');
    }
}
