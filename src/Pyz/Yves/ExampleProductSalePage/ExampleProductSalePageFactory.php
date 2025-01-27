<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\ExampleProductSalePage;

use Spryker\Client\Catalog\CatalogClientInterface;
use Spryker\Client\UrlStorage\UrlStorageClientInterface;
use Spryker\Shared\Kernel\Store;
use Spryker\Yves\Kernel\AbstractFactory;

class ExampleProductSalePageFactory extends AbstractFactory
{
    /**
     * @return array<string>
     */
    public function getExampleProductSalePageWidgetPlugins(): array
    {
        return $this->getProvidedDependency(ExampleProductSalePageDependencyProvider::PLUGIN_PRODUCT_SALE_PAGE_WIDGETS);
    }

    /**
     * @return \Spryker\Client\UrlStorage\UrlStorageClientInterface
     */
    public function getUrlStorageClient(): UrlStorageClientInterface
    {
        return $this->getProvidedDependency(ExampleProductSalePageDependencyProvider::CLIENT_URL_STORAGE);
    }

    /**
     * @return \Spryker\Shared\Kernel\Store
     */
    public function getStore(): Store
    {
        return $this->getProvidedDependency(ExampleProductSalePageDependencyProvider::STORE);
    }

    /**
     * @return \Spryker\Client\Catalog\CatalogClientInterface
     */
    public function getCatalogClient(): CatalogClientInterface
    {
        return $this->getProvidedDependency(ExampleProductSalePageDependencyProvider::CLIENT_CATALOG);
    }
}
