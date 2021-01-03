<?php

namespace Container3xxUBxd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2d084 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerabd94 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese2ec8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getConnection', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getMetadataFactory', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getExpressionBuilder', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'beginTransaction', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getCache', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getCache();
    }

    public function transactional($func)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'transactional', array('func' => $func), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->transactional($func);
    }

    public function commit()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'commit', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->commit();
    }

    public function rollback()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'rollback', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getClassMetadata', array('className' => $className), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'createQuery', array('dql' => $dql), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'createNamedQuery', array('name' => $name), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'createQueryBuilder', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'flush', array('entity' => $entity), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'clear', array('entityName' => $entityName), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->clear($entityName);
    }

    public function close()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'close', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->close();
    }

    public function persist($entity)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'persist', array('entity' => $entity), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'remove', array('entity' => $entity), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'refresh', array('entity' => $entity), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'detach', array('entity' => $entity), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'merge', array('entity' => $entity), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getRepository', array('entityName' => $entityName), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'contains', array('entity' => $entity), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getEventManager', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getConfiguration', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'isOpen', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getUnitOfWork', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getProxyFactory', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'initializeObject', array('obj' => $obj), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'getFilters', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'isFiltersStateClean', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'hasFilters', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return $this->valueHolder2d084->hasFilters();
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

        $instance->initializerabd94 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2d084) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2d084 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2d084->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, '__get', ['name' => $name], $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        if (isset(self::$publicPropertiese2ec8[$name])) {
            return $this->valueHolder2d084->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d084;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder2d084;
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
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d084;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder2d084;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value; return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, '__isset', array('name' => $name), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d084;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2d084;
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
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, '__unset', array('name' => $name), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d084;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2d084;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, '__clone', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        $this->valueHolder2d084 = clone $this->valueHolder2d084;
    }

    public function __sleep()
    {
        $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, '__sleep', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;

        return array('valueHolder2d084');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerabd94 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerabd94;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerabd94 && ($this->initializerabd94->__invoke($valueHolder2d084, $this, 'initializeProxy', array(), $this->initializerabd94) || 1) && $this->valueHolder2d084 = $valueHolder2d084;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2d084;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2d084;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
