<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.modules.source_retriever.url' shared service.

$this->services['mbo.modules.source_retriever.url'] = $instance = new \PrestaShop\Module\Mbo\Module\SourceRetriever\AddonsUrlSourceRetriever(($this->services['mbo.addons.data_provider'] ?? $this->load('getMbo_Addons_DataProviderService.php')), ($this->services['translator'] ?? $this->getTranslatorService()), (\dirname(__DIR__, 4).'/app/../modules'));

$instance->cacheDir = $this->targetDir.'';

return $instance;
