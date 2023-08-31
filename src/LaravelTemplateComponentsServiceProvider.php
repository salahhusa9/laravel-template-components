<?php

namespace Salahhusa9\LaravelTemplateComponents;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelTemplateComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-template-components')
            ->hasConfigFile()
            ->hasViews()
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->askToStarRepoOnGitHub('salahhusa9/laravel-template-components');
            });

        $this->loadViewComponentsAs('template-components', [
            'card' => 'template-components::components.card',
            'button' => 'template-components::components.button',
            'input' => 'template-components::components.input',
            'select' => 'template-components::components.select',
            'textarea' => 'template-components::components.textarea',
        ]);
    }
}
