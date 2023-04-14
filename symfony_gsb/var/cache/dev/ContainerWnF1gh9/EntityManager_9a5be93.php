<?php

namespace ContainerWnF1gh9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc1cf3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere039a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties81c75 = [
        
    ];

    public function getConnection()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getConnection', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getMetadataFactory', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getExpressionBuilder', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'beginTransaction', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getCache', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getCache();
    }

    public function transactional($func)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'transactional', array('func' => $func), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'wrapInTransaction', array('func' => $func), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'commit', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->commit();
    }

    public function rollback()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'rollback', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getClassMetadata', array('className' => $className), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'createQuery', array('dql' => $dql), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'createNamedQuery', array('name' => $name), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'createQueryBuilder', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'flush', array('entity' => $entity), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'clear', array('entityName' => $entityName), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->clear($entityName);
    }

    public function close()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'close', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->close();
    }

    public function persist($entity)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'persist', array('entity' => $entity), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'remove', array('entity' => $entity), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'refresh', array('entity' => $entity), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'detach', array('entity' => $entity), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'merge', array('entity' => $entity), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getRepository', array('entityName' => $entityName), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'contains', array('entity' => $entity), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getEventManager', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getConfiguration', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'isOpen', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getUnitOfWork', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getProxyFactory', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'initializeObject', array('obj' => $obj), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'getFilters', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'isFiltersStateClean', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'hasFilters', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return $this->valueHolderc1cf3->hasFilters();
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

        $instance->initializere039a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc1cf3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc1cf3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc1cf3->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, '__get', ['name' => $name], $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        if (isset(self::$publicProperties81c75[$name])) {
            return $this->valueHolderc1cf3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1cf3;

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

        $targetObject = $this->valueHolderc1cf3;
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
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1cf3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc1cf3;
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
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, '__isset', array('name' => $name), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1cf3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc1cf3;
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
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, '__unset', array('name' => $name), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1cf3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc1cf3;
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
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, '__clone', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        $this->valueHolderc1cf3 = clone $this->valueHolderc1cf3;
    }

    public function __sleep()
    {
        $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, '__sleep', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;

        return array('valueHolderc1cf3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere039a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere039a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere039a && ($this->initializere039a->__invoke($valueHolderc1cf3, $this, 'initializeProxy', array(), $this->initializere039a) || 1) && $this->valueHolderc1cf3 = $valueHolderc1cf3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc1cf3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc1cf3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
