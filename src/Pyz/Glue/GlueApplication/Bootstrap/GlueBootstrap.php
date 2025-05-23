<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Pyz\Glue\GlueApplication\Bootstrap;

use Spryker\Glue\GlueApplication\Bootstrap\GlueBootstrap as SprykerGlueBootstrap;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\FallbackStorefrontApiGlueApplicationBootstrapPlugin;
use Spryker\Shared\Application\ApplicationInterface;

class GlueBootstrap extends SprykerGlueBootstrap
{
    /**
     * @param array<string> $glueApplicationBootstrapPluginClassNames
     *
     * @return \Spryker\Shared\Application\ApplicationInterface
     */
    public function boot(array $glueApplicationBootstrapPluginClassNames = []): ApplicationInterface // phpcs:ignore SlevomatCodingStandard.Functions.UnusedParameter
    {
        return parent::boot([FallbackStorefrontApiGlueApplicationBootstrapPlugin::class]);
    }
}
