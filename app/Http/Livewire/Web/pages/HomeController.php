<?php

namespace App\Http\Livewire\Web\pages;

use Livewire\Component;
use Illuminate\View\View;

use Domain\Post\Models\Post;
use Domain\Team\Models\Team;
use Illuminate\Http\Request;
use Domain\Service\Models\Service;
use Domain\Aparence\Models\Aparence;
use Artesaos\SEOTools\Facades\SEOMeta;
use Domain\Portfolio\Models\Portfolio;
use Artesaos\SEOTools\Facades\SEOTools;
use Domain\Enterprise\Models\Enterprise;

class HomeController extends Component
{
    public $Enterprise;
    public $aparence;
    public $Services;
    public $Post;
    public $portfolios;
    public $Team;

    public function mount(Enterprise $enterprise, Service $service, 
                        Post $post, Portfolio $portfolio,Team $team, Aparence $aparence, Request $request): void
    {
        $this->Aparence = $aparence::where('published', true)->get();
        $this->Enterprise = $enterprise::where('published', true)->first();
        $this->Services = $service::where('published', true)->orderBy('created_at', 'desc')->get();
        $this->Post = $post::with(['category','user'])->where('published', true)->orderBy('created_at', 'desc')->limit(3)->get();
        $this->portfolios = $portfolio::with(['service','gallery'])->where('published', true)->orderBy('created_at', 'desc')->limit(3)->get();
        $this->Team = $team::where('published', true)->orderBy('created_at', 'desc')->get();

        $request->visitor()->visit();
    }

    public function render(): View
    {
        
        SEOTools::setTitle('Home');
        SEOTools::setDescription('A Egoli World Business é uma empresa angolana, 
        sediada em Luanda e com delegações em Portugal e na República do Congo, 
        que procura promover parcerias para o desenvolvimento das comunidades. ');
        SEOMeta::addKeyword('Figueira Filipa & Filhos','FFF','Eletricidade','Construção Civil','FFF - Eletrica','FFF serviços'); 
        SEOTools::opengraph()->setUrl('https://egoliworldbusiness.com');
        SEOTools::setCanonical('https://egoliworldbusiness.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@egoliworldbusiness');
        SEOTools::jsonLd()->addImage('https://egoliworldbusiness.com/public/assets/images/resources/logo-1.png');

        return view('livewire.web.pages.home')->layout('layouts.base');
    }
}
