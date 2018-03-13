<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Customer;

use Spryker\Zed\Customer\CustomerConfig as SprykerCustomerConfig;

class CustomerConfig extends SprykerCustomerConfig
{
    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getCustomerDetailExternalBlocksUrls()
    {
        return array_merge(
            parent::getCustomerDetailExternalBlocksUrls(),
            [
                'sales' => '/sales/customer/customer-orders',
                'notes' => '/customer-note-gui/index/index',
            ]
        );
    }
}
