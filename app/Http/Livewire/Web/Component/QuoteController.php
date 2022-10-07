<?php

namespace App\Http\Livewire\Web\Component;

use App\Mail\Quote\NewQuote;
use Livewire\Component;
use Domain\Service\Models\Service;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Component
{
    public $quote;
    public $services;

    protected $rules = [
        'quote.name' => 'required|string|min:3',
        'quote.email' => 'required|email',
        'quote.body' => 'nullable|string',
        'quote.service' => 'required',
    ];

    public function mount(Service $service): void
    {
        $this->services = $service::where('published', true)->get();
    }

    public function sendQuote()
    {
        $data = $this->validate()['quote'];
        dd($data);
        $dataMail = [
            'subject' => ucwords($data->service),
            'to' => 'geral@disklose.com',
            'name' => ucwords($data->name),
            'message' => ucfirst($data->body) . ' - '. $data->email
        ];

        if(Mail::send(new NewQuote(object: $dataMail ))){
            return response()->json([
                'status' => 200,
                'message' => 'Email Enviado com sucesso!',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.web.component.quote-controller');
    }
}
