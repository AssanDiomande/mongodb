<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_mongodb.odm.command_logger' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm-bundle/APM/PSRCommandLogger.php';

return $this->privates['doctrine_mongodb.odm.command_logger'] = new \Doctrine\Bundle\MongoDBBundle\APM\PSRCommandLogger(($this->privates['monolog.logger.doctrine'] ?? $this->load('getMonolog_Logger_DoctrineService.php')));
