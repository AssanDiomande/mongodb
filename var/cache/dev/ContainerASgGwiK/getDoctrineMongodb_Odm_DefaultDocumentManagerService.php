<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine_mongodb.odm.default_document_manager' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/DocumentManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ArrayCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm-bundle/Repository/ContainerRepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm-bundle/ManagerConfigurator.php';

$a = new \Doctrine\ODM\MongoDB\Configuration();

$b = new \Doctrine\Common\Cache\ArrayCache();
$b->setNamespace('sf_mongodb_default_XWFxjq_');
$c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$c->addDriver(new \Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => ($this->targetDirs[3].'/src/Document')]), 'App\\Document');

$a->setDocumentNamespaces(['App' => 'App\\Document']);
$a->setMetadataCacheImpl($b);
$a->setMetadataDriverImpl($c);
$a->setProxyDir(($this->targetDirs[0].'/doctrine/odm/mongodb/Proxies'));
$a->setProxyNamespace('MongoDBODMProxies');
$a->setAutoGenerateProxyClasses(2);
$a->setHydratorDir(($this->targetDirs[0].'/doctrine/odm/mongodb/Hydrators'));
$a->setHydratorNamespace('Hydrators');
$a->setAutoGenerateHydratorClasses(1);
$a->setDefaultDB($this->getEnv('resolve:MONGODB_DB'));
$a->setDefaultCommitOptions([]);
$a->setDefaultDocumentRepositoryClassName('Doctrine\\ODM\\MongoDB\\Repository\\DocumentRepository');
$a->setDefaultGridFSRepositoryClassName('Doctrine\\ODM\\MongoDB\\Repository\\DefaultGridFSRepository');
$a->setPersistentCollectionDir(($this->targetDirs[0].'/doctrine/odm/mongodb/PersistentCollections'));
$a->setPersistentCollectionNamespace('PersistentCollections');
$a->setAutoGeneratePersistentCollectionClasses(0);
$a->setRepositoryFactory(new \Doctrine\Bundle\MongoDBBundle\Repository\ContainerRepositoryFactory(($this->privates['.service_locator.9_yeNH1'] ?? ($this->privates['.service_locator.9_yeNH1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], [])))));

$this->services['doctrine_mongodb.odm.default_document_manager'] = $instance = \Doctrine\ODM\MongoDB\DocumentManager::create(($this->services['doctrine_mongodb.odm.default_connection'] ?? $this->load('getDoctrineMongodb_Odm_DefaultConnectionService.php')), $a, new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this));

(new \Doctrine\Bundle\MongoDBBundle\ManagerConfigurator([]))->configure($instance);

return $instance;