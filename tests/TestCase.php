<?php

namespace MyagmarsurenSedjav\SimplePaymentPocketDriver\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use MyagmarsurenSedjav\SimplePaymentPocketDriver\SimplePaymentPocketDriverServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MyagmarsurenSedjav\\SimplePaymentPocketDriver\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            SimplePaymentPocketDriverServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_simple-payment-pocket-driver_table.php.stub';
        $migration->up();
        */
    }
}
