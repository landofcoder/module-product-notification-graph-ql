<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\ProductNotificationGraphQl\Model\Resolver\DataProvider;

class MySubscribeProductStock
{

    private $myProductStock;

    /**
     * @param \Lof\ProductNotificationGraphQl\Model\Resolver\MyProductStock $myProductStock
     */
    public function __construct(
        \Lof\ProductNotificationGraphQl\Model\Resolver\MyProductStock $myProductStock
    ) {
        $this->myProductStock = $myProductStock;
    }

    public function getMySubscribeProductStock()
    {
        return 'proviced data';
    }
}

