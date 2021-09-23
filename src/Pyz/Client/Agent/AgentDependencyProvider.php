<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\Agent;

use Spryker\Client\Agent\AgentDependencyProvider as SprykerAgentDependencyProvider;
use Spryker\Client\Quote\Plugin\Agent\SanitizeCustomerQuoteImpersonationSessionFinisherPlugin;
use Spryker\Client\ShoppingListSession\Plugin\Agent\SanitizeCustomerShoppingListsImpersonationSessionFinisherPlugin;

class AgentDependencyProvider extends SprykerAgentDependencyProvider
{
    /**
     * @return array<\Spryker\Client\AgentExtension\Dependency\Plugin\ImpersonationSessionFinisherPluginInterface>
     */
    protected function getImpersonationSessionFinisherPlugins(): array
    {
        return [
            new SanitizeCustomerQuoteImpersonationSessionFinisherPlugin(),
            new SanitizeCustomerShoppingListsImpersonationSessionFinisherPlugin(),
        ];
    }
}
