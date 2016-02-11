<?php

namespace Pyz\Zed\Price\Business;

use Spryker\Zed\Price\Business\PriceFacade as SprykerPriceFacade;
use Psr\Log\LoggerInterface;

/**
 * @method \Pyz\Zed\Price\Business\PriceBusinessFactory getFactory()
 */
class PriceFacade extends SprykerPriceFacade implements PriceFacadeInterface
{

    /**
     * @param \Psr\Log\LoggerInterface $messenger
     */
    public function installDemoData(LoggerInterface $messenger)
    {
        $this->getFactory()->createDemoDataInstaller($messenger)->install();
    }

}
