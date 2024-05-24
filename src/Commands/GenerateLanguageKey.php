<?php

namespace Altas\ExportLanguage\Commands;

use Illuminate\Console\Command;

class GenerateLanguageKey extends Command
{
    protected $signature = 'ats:generate-language-key';

    protected $description = 'Generate language key from file(s)';

    public function handle() {

        $this->info( 'Hello' );

        return 0;
    }
}