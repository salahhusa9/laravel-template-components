<?php

namespace Salahhusa9\LaravelTemplateComponents\Commands;

use Illuminate\Console\Command;

class LaravelTemplateComponentsCommand extends Command
{
    public $signature = 'laravel-template-components';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
