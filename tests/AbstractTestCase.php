<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Swagger.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Tests\Swagger;

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
    protected function getServiceProviderClass($app): string
    {
        return \Artisanry\Swagger\SwaggerServiceProvider::class;
    }
}
