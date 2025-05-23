<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Pyz\Yves\ProductSetWidget;

use Spryker\Yves\Kernel\Container;
use SprykerShop\Yves\ProductSetWidget\ProductSetWidgetDependencyProvider as SprykerProductSetWidgetDependencyProvider;

class ProductSetWidgetDependencyProvider extends SprykerProductSetWidgetDependencyProvider
{
    /**
     * @var string
     */
    public const CLIENT_PRODUCT_SET_STORAGE = 'CLIENT_PRODUCT_SET_STORAGE';

    /**
     * @var string
     */
    public const CLIENT_PRODUCT_STORAGE = 'CLIENT_PRODUCT_STORAGE';

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    public function provideDependencies(Container $container): Container
    {
        $container = parent::provideDependencies($container);

        $container = $this->addProductStorageClient($container);
        $container = $this->addProductSetStorageClient($container);

        return $container;
    }

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return mixed
     */
    protected function addProductStorageClient(Container $container)
    {
        $container->set(static::CLIENT_PRODUCT_STORAGE, function (Container $container) {
            return $container->getLocator()->productStorage()->client();
        });

        return $container;
    }

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     *
     * @return \Spryker\Yves\Kernel\Container
     */
    protected function addProductSetStorageClient(Container $container): Container
    {
        $container->set(static::CLIENT_PRODUCT_SET_STORAGE, function (Container $container) {
            return $container->getLocator()->productSetStorage()->client();
        });

        return $container;
    }
}
