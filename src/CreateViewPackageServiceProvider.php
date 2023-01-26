<?php

namespace Katana9108\CreateViewPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Katana9108\CreateViewPackage\Commands\CreateViewPackageCommand;

class CreateViewPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('createview-package')
            ->hasConfigFile()
            ->hasCommand(CreateViewPackageCommand::class);
    }

}
