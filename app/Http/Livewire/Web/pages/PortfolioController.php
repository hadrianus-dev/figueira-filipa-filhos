<?php

namespace App\Http\Livewire\Web\Pages;

use Livewire\Component;
use Domain\Gallery\Models\Gallery;
use Domain\Portfolio\Models\Portfolio;
use Artesaos\SEOTools\Facades\SEOTools;
use Domain\Enterprise\Models\Enterprise;

class PortfolioController extends Component
{
    public $portfolios;
    public $gallery;
    public $Enterprise;
    
    public function mount(Portfolio $portfolio, Gallery $gallery, Enterprise $enterprise): void
    {
        $this->portfolios = $portfolio::with(['service','gallery'])->where('published', true)->orderBy('created_at', 'desc')->get();
        $this->gallery = $gallery::with(['portfolio'])->where('published', true)->get();
        $this->Enterprise = $enterprise::where('published', true)->first();
        #dd($this->gallery[3]['portfolio_id']);
        #dd($this->portfolios[0]->gallery()->first()['cover']);
    }

    public function render()
    {
        
        SEOTools::setTitle('Contacto');
        SEOTools::setDescription('Temos um suporte altamente especializado e completamente a seu dispor. 
        Entre em contacto e saia agora mesmo da zona de incerteza, obtenha explicações claras do que quer.');
        SEOTools::opengraph()->setUrl('https://figueirafilipaefilhos.com/contact');
        SEOTools::setCanonical('https://figueirafilipaefilhos.com/portfolio');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@egoliworldbusiness');
        SEOTools::jsonLd()->addImage('https://figueirafilipaefilhos.com/public/assets/images/resources/logo-1.png');
        
        return view('livewire.web.pages.portfolio-controller')->layout('layouts.base');
    }
}
