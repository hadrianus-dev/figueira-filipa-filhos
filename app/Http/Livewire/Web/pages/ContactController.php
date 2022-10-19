<?php

namespace App\Http\Livewire\Web\Pages;

use Livewire\Component;
use Artesaos\SEOTools\Facades\SEOTools;
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
        
        SEOTools::setTitle('Contacto');
        SEOTools::setDescription('Temos um suporte altamente especializado e completamente a seu dispor. 
        Entre em contacto e saia agora mesmo da zona de incerteza, obtenha explicações claras do que quer.');
        SEOTools::opengraph()->setUrl('https://figueirafilipaefilhos.com/contact');
        SEOTools::setCanonical('https://figueirafilipaefilhos.com/contact');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@egoliworldbusiness');
        SEOTools::jsonLd()->addImage('https://figueirafilipaefilhos.com/public/assets/images/resources/logo-1.png');
        
        return view('livewire.web.pages.contact-controller')->layout('layouts.base');
    }
}
