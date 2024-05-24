<?php

namespace Altas\ExportLanguage;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function boot() {

        $this->registerCommands();
    }

    public function registerCommands() {

        $this->commands( [
            Commands\GenerateLanguageKey::class,
        ] );
    }
}