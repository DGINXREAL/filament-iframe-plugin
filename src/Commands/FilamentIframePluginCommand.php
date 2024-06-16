<?php

namespace DGINXREAL\FilamentIframePlugin\Commands;

use Illuminate\Console\Command;

class FilamentIframePluginCommand extends Command
{
    public $signature = 'filament-iframe-plugin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
