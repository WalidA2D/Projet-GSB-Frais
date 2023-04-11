<?php

namespace ContainerZEvXqct;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdfcaa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8a4e7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties41146 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getConnection', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getMetadataFactory', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getExpressionBuilder', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'beginTransaction', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getCache', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'transactional', array('func' => $func), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'commit', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->commit();
    }

    public function rollback()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'rollback', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getClassMetadata', array('className' => $className), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'createQuery', array('dql' => $dql), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'createNamedQuery', array('name' => $name), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'createQueryBuilder', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'flush', array('entity' => $entity), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'clear', array('entityName' => $entityName), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->clear($entityName);
    }

    public function close()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'close', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->close();
    }

    public function persist($entity)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'persist', array('entity' => $entity), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'remove', array('entity' => $entity), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'refresh', array('entity' => $entity), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'detach', array('entity' => $entity), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'merge', array('entity' => $entity), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'contains', array('entity' => $entity), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getEventManager', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getConfiguration', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'isOpen', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getUnitOfWork', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getProxyFactory', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'initializeObject', array('obj' => $obj), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'getFilters', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'isFiltersStateClean', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'hasFilters', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return $this->valueHolderdfcaa->hasFilters();
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

        $instance->initializer8a4e7 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderdfcaa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdfcaa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdfcaa->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, '__get', ['name' => $name], $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        if (isset(self::$publicProperties41146[$name])) {
            return $this->valueHolderdfcaa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfcaa;

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

        $targetObject = $this->valueHolderdfcaa;
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
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfcaa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdfcaa;
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
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, '__isset', array('name' => $name), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfcaa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdfcaa;
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
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, '__unset', array('name' => $name), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfcaa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdfcaa;
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
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, '__clone', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        $this->valueHolderdfcaa = clone $this->valueHolderdfcaa;
    }

    public function __sleep()
    {
        $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, '__sleep', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;

        return array('valueHolderdfcaa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8a4e7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8a4e7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8a4e7 && ($this->initializer8a4e7->__invoke($valueHolderdfcaa, $this, 'initializeProxy', array(), $this->initializer8a4e7) || 1) && $this->valueHolderdfcaa = $valueHolderdfcaa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdfcaa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdfcaa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
