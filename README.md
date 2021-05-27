# Mage2 Module Lof ProductNotificationGraphQl

    ``lof/module-productnotificationgraphql``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Magento 2 product notify in stock, sales price to subscriber Graph QL

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Lof`
 - Enable the module by running `php bin/magento module:enable Lof_ProductNotificationGraphQl`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require lof/module-productnotificationgraphql`
 - enable the module by running `php bin/magento module:enable Lof_ProductNotificationGraphQl`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - enable (productnotification/general_settings/enable)

 - email_identity (productnotification/productalert/email_identity)

 - allow_price (productnotification/productalert/allow_price)

 - disable_price_guest (productnotification/productalert/disable_price_guest)

 - allow_stock (productnotification/productalert/allow_stock)

 - disable_stock_guest (productnotification/productalert/disable_stock_guest)

 - allow_new_product (productnotification/productalert/allow_new_product)

 - cat_ids (productnotification/productalert/cat_ids)


## Specifications

 - GraphQl Endpoint
	- SubscribeProductSalePrice

 - GraphQl Endpoint
	- SubscribeProductStock

 - GraphQl Endpoint
	- UnSubscribeProductSalePrice

 - GraphQl Endpoint
	- UnSubscribeProductStock

 - GraphQl Endpoint
	- MySubscribeProductSalePrice

 - GraphQl Endpoint
	- MySubscribeProductStock


## Attributes



