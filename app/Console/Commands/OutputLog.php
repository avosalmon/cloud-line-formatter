<?php

namespace App\Console\Commands;

use Exception;
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
        Log::info('Laravel log output from artisan command.', ['user_id' => 1234, 'order_id' => 5678]);

        Log::warning('This is a warning message.');

        Log::error('This is an error message.');

        Log::critical('This is a critical message.');

        Log::alert('This is an alert message.');

        Log::emergency('This is an emergency message.');

        throw new Exception('Something went wrong.');
    }
}
