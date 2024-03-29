<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.psxdesign.handler.font_upsert_handler' shared service.

return $this->services['prestashop.module.psxdesign.handler.font_upsert_handler'] = new \PrestaShop\Module\PsxDesign\Handler\FontUpsertHandler(($this->services['prestashop.module.psxdesign.repository.psxdesign_fonts_repository'] ?? $this->load('getPrestashop_Module_Psxdesign_Repository_PsxdesignFontsRepositoryService.php')), ($this->services['prestashop.module.psxdesign.processor.font_stylesheets_processor'] ?? $this->load('getPrestashop_Module_Psxdesign_Processor_FontStylesheetsProcessorService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['prestashop.module.psxdesign.provider.theme_configuration_provider'] ?? $this->load('getPrestashop_Module_Psxdesign_Provider_ThemeConfigurationProviderService.php')));
