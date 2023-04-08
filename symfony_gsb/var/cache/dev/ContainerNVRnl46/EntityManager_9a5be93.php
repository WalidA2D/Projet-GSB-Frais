<?php

namespace ContainerNVRnl46;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4caa1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer02b1c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9b3c7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getConnection', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getMetadataFactory', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getExpressionBuilder', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'beginTransaction', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getCache', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getCache();
    }

    public function transactional($func)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'transactional', array('func' => $func), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'wrapInTransaction', array('func' => $func), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'commit', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->commit();
    }

    public function rollback()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'rollback', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getClassMetadata', array('className' => $className), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'createQuery', array('dql' => $dql), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'createNamedQuery', array('name' => $name), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'createQueryBuilder', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'flush', array('entity' => $entity), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'clear', array('entityName' => $entityName), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->clear($entityName);
    }

    public function close()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'close', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->close();
    }

    public function persist($entity)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'persist', array('entity' => $entity), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'remove', array('entity' => $entity), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'refresh', array('entity' => $entity), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'detach', array('entity' => $entity), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'merge', array('entity' => $entity), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getRepository', array('entityName' => $entityName), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'contains', array('entity' => $entity), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getEventManager', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getConfiguration', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'isOpen', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getUnitOfWork', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getProxyFactory', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'initializeObject', array('obj' => $obj), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'getFilters', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'isFiltersStateClean', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'hasFilters', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return $this->valueHolder4caa1->hasFilters();
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

        $instance->initializer02b1c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder4caa1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4caa1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4caa1->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, '__get', ['name' => $name], $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        if (isset(self::$publicProperties9b3c7[$name])) {
            return $this->valueHolder4caa1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4caa1;

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

        $targetObject = $this->valueHolder4caa1;
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
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4caa1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4caa1;
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
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, '__isset', array('name' => $name), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4caa1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4caa1;
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
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, '__unset', array('name' => $name), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4caa1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4caa1;
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
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, '__clone', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        $this->valueHolder4caa1 = clone $this->valueHolder4caa1;
    }

    public function __sleep()
    {
        $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, '__sleep', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;

        return array('valueHolder4caa1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer02b1c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer02b1c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer02b1c && ($this->initializer02b1c->__invoke($valueHolder4caa1, $this, 'initializeProxy', array(), $this->initializer02b1c) || 1) && $this->valueHolder4caa1 = $valueHolder4caa1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4caa1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4caa1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
