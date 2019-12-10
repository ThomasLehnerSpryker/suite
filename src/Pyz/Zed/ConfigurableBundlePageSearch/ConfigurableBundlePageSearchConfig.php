<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ConfigurableBundlePageSearch;

use Pyz\Zed\Synchronization\SynchronizationConfig;
use Spryker\Zed\ConfigurableBundlePageSearch\ConfigurableBundlePageSearchConfig as SprykerConfigurableBundlePageSearch;

class ConfigurableBundlePageSearchConfig extends SprykerConfigurableBundlePageSearch
{
    /**
     * @return string|null
     */
    public function getConfigurableBundlePageSynchronizationPoolName(): ?string
    {
        return SynchronizationConfig::DEFAULT_SYNCHRONIZATION_POOL_NAME;
    }
}