<?php

declare(strict_types=1);

namespace Gii\ModuleDisease\Providers;

use Illuminate\Support\ServiceProvider;
use Gii\ModuleDisease\Commands as Commands;

class CommandServiceProvider extends ServiceProvider
{
    private $commands = [
        Commands\InstallMakeCommand::class
    ];


    public function register(){
        $this->commands($this->commands);
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */

    public function provides()
    {
        return $this->commands;
    }
}
