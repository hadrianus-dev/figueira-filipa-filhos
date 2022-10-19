<?php

namespace App\Http\Livewire\Web\pages;

use Livewire\Component;
use Domain\Team\Models\Team;
use Domain\Service\Models\Service;
use Artesaos\SEOTools\Facades\SEOTools;
use Domain\Enterprise\Models\Enterprise;

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
         
        SEOTools::setTitle('Quem Somos');
        SEOTools::setDescription($this->Enterprise->body);
        SEOTools::opengraph()->setUrl('https://figueirafilipaefilhos.com/about');
        SEOTools::setCanonical('https://figueirafilipaefilhos.com/about');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@egoliworldbusiness');
        SEOTools::jsonLd()->addImage('https://figueirafilipaefilhos.com/public/assets/images/resources/logo-1.png');
        
        return view('livewire.web.pages.about-controller')->layout('layouts.base');
    }
}
