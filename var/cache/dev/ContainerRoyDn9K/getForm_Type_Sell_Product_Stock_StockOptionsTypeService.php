<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.product.stock.stock_options_type' shared service.

return $this->services['form.type.sell.product.stock.stock_options_type'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Stock\StockOptionsType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')));
