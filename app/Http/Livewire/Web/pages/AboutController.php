<?php

namespace App\Http\Livewire\Web\pages;

use Livewire\Component;
use Domain\Service\Models\Service;
use Domain\Enterprise\Models\Enterprise;
use Domain\Team\Models\Team;

class AboutController extends Component
{
    public $Enterprise;
    public $Services;
    public $Team;

    public function mount(Enterprise $enterprise, Service $service, Team $team): void
    {
        $this->Enterprise = $enterprise::where('published', true)->first();
        $this->Services = $service::where('published', true)->orderBy('created_at', 'desc')->get();
        $this->Team = $team::where('published', true)->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.web.pages.about-controller')->layout('layouts.base');
    }
}
