@component('mail::message')
# Pedido de Cotação - {{ ucfirst($object->subject) }}

{{ ucwords($object->name) }} Acabou de solicitar uma 
cotação para o serviço de {{ ucfirst($object->subject) }}.

@if ($object->message !== '')
## Texto Anexo Complementar:
{{$object->message}}
@endif

Obrigado.

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
