<?php

namespace ContainerEYqTFzx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3c0ab = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdceb1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfb474 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getConnection', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getMetadataFactory', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getExpressionBuilder', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'beginTransaction', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getCache', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'transactional', array('func' => $func), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'commit', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->commit();
    }

    public function rollback()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'rollback', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getClassMetadata', array('className' => $className), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'createQuery', array('dql' => $dql), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'createNamedQuery', array('name' => $name), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'createQueryBuilder', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'flush', array('entity' => $entity), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'clear', array('entityName' => $entityName), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->clear($entityName);
    }

    public function close()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'close', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->close();
    }

    public function persist($entity)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'persist', array('entity' => $entity), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'remove', array('entity' => $entity), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'refresh', array('entity' => $entity), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'detach', array('entity' => $entity), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'merge', array('entity' => $entity), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'contains', array('entity' => $entity), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getEventManager', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getConfiguration', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'isOpen', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getUnitOfWork', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getProxyFactory', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'initializeObject', array('obj' => $obj), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'getFilters', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'isFiltersStateClean', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'hasFilters', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return $this->valueHolder3c0ab->hasFilters();
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

        $instance->initializerdceb1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder3c0ab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3c0ab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3c0ab->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, '__get', ['name' => $name], $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        if (isset(self::$publicPropertiesfb474[$name])) {
            return $this->valueHolder3c0ab->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c0ab;

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

        $targetObject = $this->valueHolder3c0ab;
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
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c0ab;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3c0ab;
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
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, '__isset', array('name' => $name), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c0ab;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3c0ab;
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
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, '__unset', array('name' => $name), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c0ab;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3c0ab;
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
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, '__clone', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        $this->valueHolder3c0ab = clone $this->valueHolder3c0ab;
    }

    public function __sleep()
    {
        $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, '__sleep', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;

        return array('valueHolder3c0ab');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdceb1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdceb1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdceb1 && ($this->initializerdceb1->__invoke($valueHolder3c0ab, $this, 'initializeProxy', array(), $this->initializerdceb1) || 1) && $this->valueHolder3c0ab = $valueHolder3c0ab;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3c0ab;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3c0ab;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
