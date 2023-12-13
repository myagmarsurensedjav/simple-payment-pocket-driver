<?php

namespace MyagmarsurenSedjav\SimplePaymentPocketDriver;

use MyagmarsurenSedjav\SimplePaymentPocketDriver\Commands\SimplePaymentPocketDriverCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SimplePaymentPocketDriverServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('simple-payment-pocket-driver')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_simple-payment-pocket-driver_table')
            ->hasCommand(SimplePaymentPocketDriverCommand::class);
    }
}
