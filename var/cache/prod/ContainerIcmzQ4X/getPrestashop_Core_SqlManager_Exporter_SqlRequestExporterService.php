<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.sql_manager.exporter.sql_request_exporter' shared service.

return $this->services['prestashop.core.sql_manager.exporter.sql_request_exporter'] = new \PrestaShop\PrestaShop\Core\SqlManager\Exporter\SqlRequestExporter(($this->services['prestashop.core.export.file_writer.export_csv_file_writer'] ?? $this->load('getPrestashop_Core_Export_FileWriter_ExportCsvFileWriterService.php')));
