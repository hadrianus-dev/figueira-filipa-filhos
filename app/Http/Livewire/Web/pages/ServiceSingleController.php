<?php

namespace App\Http\Livewire\Web\Pages;

use Domain\Enterprise\Models\Enterprise;
use Domain\Service\Models\Service;
use Livewire\Component;

class ServiceSingleController extends Component
{
    public $Enterprise;
    public $service;

    public function mount(Service $service, Enterprise $enterprise): void
    {
        $this->Enterprise = $enterprise::where('published', true)->first();
        $this->service = $service;
    }
    public function render()
    {
        return view('livewire.web.pages.service-single-controller')->layout('layouts.base');
    }
}
