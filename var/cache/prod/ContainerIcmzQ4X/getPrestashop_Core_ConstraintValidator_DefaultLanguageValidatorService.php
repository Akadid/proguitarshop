<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.constraint_validator.default_language_validator' shared service.

return $this->services['prestashop.core.constraint_validator.default_language_validator'] = new \PrestaShop\PrestaShop\Core\ConstraintValidator\DefaultLanguageValidator(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PS_LANG_DEFAULT"));
