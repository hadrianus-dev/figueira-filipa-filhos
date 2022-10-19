<?php

namespace App\Http\Livewire\Web\Component;

use Domain\FAQ\Models\FAQ;
use Livewire\Component;

class FAQSController extends Component
{
    public $faqs;
    public $faqData;

    public function mount(FAQ $faq){
        $this->faqs = $faq::where('service_id', null)->get();
    }

    public function render()
    {
        return view('livewire.web.component.f-a-q-s-controller');
    }
}
