<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Command\ConfigCommand' shared service.

return $this->services['PrestaShopBundle\\Command\\ConfigCommand'] = new \PrestaShopBundle\Command\ConfigCommand(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.adapter.data_provider.language'] ?? ($this->services['prestashop.adapter.data_provider.language'] = new \PrestaShop\PrestaShop\Adapter\Language\LanguageDataProvider())));