<?php

namespace ContainerXuvnHPx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder40d70 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere22ec = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3e3c9 = [
        
    ];

    public function getConnection()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getConnection', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getMetadataFactory', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getExpressionBuilder', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'beginTransaction', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getCache', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getCache();
    }

    public function transactional($func)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'transactional', array('func' => $func), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'wrapInTransaction', array('func' => $func), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'commit', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->commit();
    }

    public function rollback()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'rollback', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getClassMetadata', array('className' => $className), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'createQuery', array('dql' => $dql), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'createNamedQuery', array('name' => $name), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'createQueryBuilder', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'flush', array('entity' => $entity), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'clear', array('entityName' => $entityName), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->clear($entityName);
    }

    public function close()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'close', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->close();
    }

    public function persist($entity)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'persist', array('entity' => $entity), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'remove', array('entity' => $entity), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'refresh', array('entity' => $entity), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'detach', array('entity' => $entity), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'merge', array('entity' => $entity), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getRepository', array('entityName' => $entityName), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'contains', array('entity' => $entity), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getEventManager', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getConfiguration', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'isOpen', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getUnitOfWork', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getProxyFactory', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'initializeObject', array('obj' => $obj), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'getFilters', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'isFiltersStateClean', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'hasFilters', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return $this->valueHolder40d70->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializere22ec = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder40d70) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder40d70 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder40d70->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, '__get', ['name' => $name], $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        if (isset(self::$publicProperties3e3c9[$name])) {
            return $this->valueHolder40d70->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40d70;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder40d70;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40d70;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder40d70;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, '__isset', array('name' => $name), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40d70;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder40d70;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, '__unset', array('name' => $name), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40d70;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder40d70;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, '__clone', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        $this->valueHolder40d70 = clone $this->valueHolder40d70;
    }

    public function __sleep()
    {
        $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, '__sleep', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;

        return array('valueHolder40d70');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere22ec = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere22ec;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere22ec && ($this->initializere22ec->__invoke($valueHolder40d70, $this, 'initializeProxy', array(), $this->initializere22ec) || 1) && $this->valueHolder40d70 = $valueHolder40d70;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder40d70;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder40d70;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
