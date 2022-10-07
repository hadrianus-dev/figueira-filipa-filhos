<?php

namespace App\Mail\Quote;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Domain\Shared\User\ValueObject\UserValueObject;


class NewQuote extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(public array $object){}

    public function build(): self
    {
        return $this->markdown('mail.quote.new-quote');
    }
}
