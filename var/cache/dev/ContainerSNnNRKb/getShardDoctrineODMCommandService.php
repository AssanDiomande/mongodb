<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.Doctrine\Bundle\MongoDBBundle\Command\ShardDoctrineODMCommand' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Tools/Console/Command/Schema/AbstractCommand.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Tools/Console/Command/Schema/ShardCommand.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm-bundle/Command/ShardDoctrineODMCommand.php';

return $this->services['console.command.public_alias.Doctrine\\Bundle\\MongoDBBundle\\Command\\ShardDoctrineODMCommand'] = new \Doctrine\Bundle\MongoDBBundle\Command\ShardDoctrineODMCommand();
