<?php

namespace MyagmarsurenSedjav\SimplePaymentPocketDriver\Commands;

use Illuminate\Console\Command;

class SimplePaymentPocketDriverCommand extends Command
{
    public $signature = 'simple-payment-pocket-driver';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
