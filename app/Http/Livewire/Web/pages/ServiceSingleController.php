<?php

namespace App\Http\Livewire\Web\Pages;

use Livewire\Component;
use Illuminate\Http\Request;
use Domain\Service\Models\Service;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Domain\Enterprise\Models\Enterprise;
use Domain\Portfolio\Models\Portfolio;

class ServiceSingleController extends Component
{
    public $Enterprise;
    public $service;
    public $FAQ;
    public $portfolios;
    public $portfolio;

    public function mount(Service $service, Enterprise $enterprise, Request $request, Portfolio $portfolio): void
    {
        $this->Enterprise = $enterprise::where('published', true)->first();
        $this->service = $service;
        $this->FAQ = $service->FAQ()->where('published', true)->get();
        $this->portfolios = $portfolio->where('published', true)->get();
        $this->portfolio = $portfolio->where('service_id', $this->service->id)->orderBy('created_at', 'desc')->limit(3)->get();
        $request->visitor()->visit($service); 
    }
    
    public function render()
    {
        $base = 'https://figueirafilipaefilhos.com/post/';
        SEOMeta::setTitle($this->service->title);
        SEOMeta::setDescription($this->service->body);
        SEOMeta::addMeta('article:published_time', $this->service->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $this->service->category->title, 'property');
        #SEOMeta::addKeyword(['key1', 'key2', 'key3']);

        OpenGraph::setDescription($this->service->body);
        OpenGraph::setTitle($this->service->title);
        OpenGraph::setUrl($base.$this->service->slug);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt');
        OpenGraph::addProperty('locale:alternate', ['pt-br', 'en-us']);

        OpenGraph::setTitle($this->service->title)
            ->setDescription($this->service->body)
            ->setType('article')
            ->setArticle([
                'published_time' => $this->service->created_at,
                'modified_time' => $this->service->updated_at,
                'author' => 'Figueira Filipa & Fulhos',
                'tag' => 'Portifolio / FFF',
            ]);
            
        return view('livewire.web.pages.service-single-controller')->layout('layouts.base');
    }
}
