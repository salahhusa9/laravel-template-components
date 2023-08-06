<?php

namespace Salahhusa9\LaravelTemplateComponents;

use Salahhusa9\LaravelTemplateComponents\Commands\LaravelTemplateComponentsCommand;
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
            ->hasMigration('create_laravel-template-components_table')
            ->hasCommand(LaravelTemplateComponentsCommand::class);
    }
}
