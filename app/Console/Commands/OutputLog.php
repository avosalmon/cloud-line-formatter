<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

#[Signature('app:output-log')]
#[Description('Command description')]
class OutputLog extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info('OutputLog command executed');
    }
}
