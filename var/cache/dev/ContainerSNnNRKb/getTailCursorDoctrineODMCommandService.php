<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.Doctrine\Bundle\MongoDBBundle\Command\TailCursorDoctrineODMCommand' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm-bundle/Command/TailCursorDoctrineODMCommand.php';

return $this->services['console.command.public_alias.Doctrine\\Bundle\\MongoDBBundle\\Command\\TailCursorDoctrineODMCommand'] = new \Doctrine\Bundle\MongoDBBundle\Command\TailCursorDoctrineODMCommand();