<?php

namespace BrianFaust\Tests\Swagger;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Interfaces\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return \BrianFaust\Swagger\SwaggerServiceProvider::class;
    }
}
