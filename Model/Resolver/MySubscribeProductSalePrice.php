<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\ProductNotificationGraphQl\Model\Resolver;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class MySubscribeProductSalePrice implements ResolverInterface
{

    private $mySubscribeProductSalePriceDataProvider;

    /**
     * @param DataProvider\MySubscribeProductSalePrice $mySubscribeProductSalePriceRepository
     */
    public function __construct(
        DataProvider\MySubscribeProductSalePrice $mySubscribeProductSalePriceDataProvider
    ) {
        $this->mySubscribeProductSalePriceDataProvider = $mySubscribeProductSalePriceDataProvider;
    }

    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        $mySubscribeProductSalePriceData = $this->mySubscribeProductSalePriceDataProvider->getMySubscribeProductSalePrice();
        return $mySubscribeProductSalePriceData;
    }
}

