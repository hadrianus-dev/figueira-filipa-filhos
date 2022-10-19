<?php

namespace App\Http\Livewire\Web\Component;

use Livewire\Component;
use Domain\Service\Models\Service;

class HeaderSearch extends Component
{
    public $serviceResults;
    public $searchWords;
    public $enterprise;

    public function render()
    {
        if($this->searchWords){
            $this->serviceResults = Service::where([['published', true],['title', 'like', '%'.$this->searchWords.'%']])
            ->orWhere([['published', true],['description', 'like', '%'.$this->searchWords.'%']])->get();
        }

        return view('livewire.web.component.header-search');
    }
   
}
