<?php

namespace ContainerHxT1nTr;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb70f9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd0e80 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties40025 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getConnection', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getMetadataFactory', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getExpressionBuilder', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'beginTransaction', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getCache', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'transactional', array('func' => $func), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'commit', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->commit();
    }

    public function rollback()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'rollback', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getClassMetadata', array('className' => $className), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'createQuery', array('dql' => $dql), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'createNamedQuery', array('name' => $name), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'createQueryBuilder', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'flush', array('entity' => $entity), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'clear', array('entityName' => $entityName), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->clear($entityName);
    }

    public function close()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'close', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->close();
    }

    public function persist($entity)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'persist', array('entity' => $entity), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'remove', array('entity' => $entity), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'refresh', array('entity' => $entity), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'detach', array('entity' => $entity), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'merge', array('entity' => $entity), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'contains', array('entity' => $entity), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getEventManager', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getConfiguration', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'isOpen', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getUnitOfWork', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getProxyFactory', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'initializeObject', array('obj' => $obj), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'getFilters', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'isFiltersStateClean', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'hasFilters', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return $this->valueHolderb70f9->hasFilters();
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

        $instance->initializerd0e80 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb70f9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb70f9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb70f9->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, '__get', ['name' => $name], $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        if (isset(self::$publicProperties40025[$name])) {
            return $this->valueHolderb70f9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb70f9;

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

        $targetObject = $this->valueHolderb70f9;
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
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb70f9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb70f9;
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
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, '__isset', array('name' => $name), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb70f9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb70f9;
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
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, '__unset', array('name' => $name), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb70f9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb70f9;
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
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, '__clone', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        $this->valueHolderb70f9 = clone $this->valueHolderb70f9;
    }

    public function __sleep()
    {
        $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, '__sleep', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;

        return array('valueHolderb70f9');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd0e80 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd0e80;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd0e80 && ($this->initializerd0e80->__invoke($valueHolderb70f9, $this, 'initializeProxy', array(), $this->initializerd0e80) || 1) && $this->valueHolderb70f9 = $valueHolderb70f9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb70f9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb70f9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
