<?php

namespace App\Http\Livewire\Web\Component;

use Livewire\Component;
use Domain\Enterprise\Models\Enterprise;

class Header extends Component
{
    public $Enterprise;

    public function mount(Enterprise $enterprise): void
    {
        $this->Enterprise = $enterprise::where('published', true)->first();
    }
    
    public function render()
    {
        return view('livewire.web.component.header');
    }
}
