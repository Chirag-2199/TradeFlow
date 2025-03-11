<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StockAddedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $stock;

    public function __construct($stock)
    {
        $this->stock = $stock;
    }

    public function build()
    {
        return $this->subject('New Stock Added')
                    ->view('emails.stock_added')
                    ->with(['stock' => $this->stock]);
    }
}
