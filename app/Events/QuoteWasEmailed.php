<?php namespace App\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class QuoteWasEmailed
 */
class QuoteWasEmailed extends Event
{
    use SerializesModels;
    public $quote;

    /**
     * Create a new event instance.
     *
     * @param $quote
     */
    public function __construct($quote)
    {
        $this->quote = $quote;
    }
}
