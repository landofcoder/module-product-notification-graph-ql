<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\ProductNotificationGraphQl\Model\Resolver\DataProvider;

class MySubscribeProductSalePrice
{

    private $myProductSalePrice;

    /**
     * @param \Lof\ProductNotificationGraphQl\Model\Resolver\MyProductSalePrice $myProductSalePrice
     */
    public function __construct(
        \Lof\ProductNotificationGraphQl\Model\Resolver\MyProductSalePrice $myProductSalePrice
    ) {
        $this->myProductSalePrice = $myProductSalePrice;
    }

    public function getMySubscribeProductSalePrice()
    {
        return 'proviced data';
    }
}

