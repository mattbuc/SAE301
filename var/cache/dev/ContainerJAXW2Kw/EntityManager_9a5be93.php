<?php

namespace ContainerJAXW2Kw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder33de0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera3fdf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties28add = [
        
    ];

    public function getConnection()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getConnection', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getMetadataFactory', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getExpressionBuilder', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'beginTransaction', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getCache', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getCache();
    }

    public function transactional($func)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'transactional', array('func' => $func), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'wrapInTransaction', array('func' => $func), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'commit', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->commit();
    }

    public function rollback()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'rollback', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getClassMetadata', array('className' => $className), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'createQuery', array('dql' => $dql), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'createNamedQuery', array('name' => $name), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'createQueryBuilder', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'flush', array('entity' => $entity), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'clear', array('entityName' => $entityName), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->clear($entityName);
    }

    public function close()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'close', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->close();
    }

    public function persist($entity)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'persist', array('entity' => $entity), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'remove', array('entity' => $entity), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'refresh', array('entity' => $entity), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'detach', array('entity' => $entity), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'merge', array('entity' => $entity), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getRepository', array('entityName' => $entityName), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'contains', array('entity' => $entity), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getEventManager', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getConfiguration', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'isOpen', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getUnitOfWork', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getProxyFactory', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'initializeObject', array('obj' => $obj), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'getFilters', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'isFiltersStateClean', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'hasFilters', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return $this->valueHolder33de0->hasFilters();
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

        $instance->initializera3fdf = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder33de0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder33de0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder33de0->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, '__get', ['name' => $name], $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        if (isset(self::$publicProperties28add[$name])) {
            return $this->valueHolder33de0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33de0;

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

        $targetObject = $this->valueHolder33de0;
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
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33de0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder33de0;
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
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, '__isset', array('name' => $name), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33de0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder33de0;
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
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, '__unset', array('name' => $name), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder33de0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder33de0;
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
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, '__clone', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        $this->valueHolder33de0 = clone $this->valueHolder33de0;
    }

    public function __sleep()
    {
        $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, '__sleep', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;

        return array('valueHolder33de0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera3fdf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera3fdf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera3fdf && ($this->initializera3fdf->__invoke($valueHolder33de0, $this, 'initializeProxy', array(), $this->initializera3fdf) || 1) && $this->valueHolder33de0 = $valueHolder33de0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder33de0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder33de0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
