<?php

namespace ContainerBg2YjCx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9ede8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer17ddc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1db50 = [
        
    ];

    public function getConnection()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getConnection', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getMetadataFactory', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getExpressionBuilder', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'beginTransaction', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getCache', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'transactional', array('func' => $func), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->transactional($func);
    }

    public function commit()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'commit', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->commit();
    }

    public function rollback()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'rollback', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getClassMetadata', array('className' => $className), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'createQuery', array('dql' => $dql), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'createNamedQuery', array('name' => $name), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'createQueryBuilder', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'flush', array('entity' => $entity), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'clear', array('entityName' => $entityName), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->clear($entityName);
    }

    public function close()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'close', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->close();
    }

    public function persist($entity)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'persist', array('entity' => $entity), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'remove', array('entity' => $entity), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'refresh', array('entity' => $entity), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'detach', array('entity' => $entity), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'merge', array('entity' => $entity), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'contains', array('entity' => $entity), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getEventManager', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getConfiguration', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'isOpen', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getUnitOfWork', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getProxyFactory', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'initializeObject', array('obj' => $obj), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'getFilters', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'isFiltersStateClean', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'hasFilters', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return $this->valueHolder9ede8->hasFilters();
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

        $instance->initializer17ddc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9ede8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9ede8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9ede8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, '__get', ['name' => $name], $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        if (isset(self::$publicProperties1db50[$name])) {
            return $this->valueHolder9ede8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ede8;

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

        $targetObject = $this->valueHolder9ede8;
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
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ede8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9ede8;
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
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, '__isset', array('name' => $name), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ede8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9ede8;
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
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, '__unset', array('name' => $name), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ede8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9ede8;
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
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, '__clone', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        $this->valueHolder9ede8 = clone $this->valueHolder9ede8;
    }

    public function __sleep()
    {
        $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, '__sleep', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;

        return array('valueHolder9ede8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer17ddc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer17ddc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer17ddc && ($this->initializer17ddc->__invoke($valueHolder9ede8, $this, 'initializeProxy', array(), $this->initializer17ddc) || 1) && $this->valueHolder9ede8 = $valueHolder9ede8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9ede8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9ede8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
