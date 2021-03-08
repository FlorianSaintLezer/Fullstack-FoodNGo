<?php

namespace ContainerWo4V2XH;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder62f33 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer54289 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa63ef = [
        
    ];

    public function getConnection()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getConnection', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getMetadataFactory', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getExpressionBuilder', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'beginTransaction', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getCache', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getCache();
    }

    public function transactional($func)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'transactional', array('func' => $func), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->transactional($func);
    }

    public function commit()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'commit', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->commit();
    }

    public function rollback()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'rollback', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getClassMetadata', array('className' => $className), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'createQuery', array('dql' => $dql), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'createNamedQuery', array('name' => $name), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'createQueryBuilder', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'flush', array('entity' => $entity), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'clear', array('entityName' => $entityName), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->clear($entityName);
    }

    public function close()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'close', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->close();
    }

    public function persist($entity)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'persist', array('entity' => $entity), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'remove', array('entity' => $entity), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'refresh', array('entity' => $entity), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'detach', array('entity' => $entity), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'merge', array('entity' => $entity), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getRepository', array('entityName' => $entityName), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'contains', array('entity' => $entity), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getEventManager', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getConfiguration', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'isOpen', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getUnitOfWork', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getProxyFactory', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'initializeObject', array('obj' => $obj), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'getFilters', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'isFiltersStateClean', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'hasFilters', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return $this->valueHolder62f33->hasFilters();
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

        $instance->initializer54289 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder62f33) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder62f33 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder62f33->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, '__get', ['name' => $name], $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        if (isset(self::$publicPropertiesa63ef[$name])) {
            return $this->valueHolder62f33->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62f33;

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

        $targetObject = $this->valueHolder62f33;
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
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62f33;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder62f33;
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
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, '__isset', array('name' => $name), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62f33;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder62f33;
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
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, '__unset', array('name' => $name), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62f33;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder62f33;
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
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, '__clone', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        $this->valueHolder62f33 = clone $this->valueHolder62f33;
    }

    public function __sleep()
    {
        $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, '__sleep', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;

        return array('valueHolder62f33');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer54289 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer54289;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer54289 && ($this->initializer54289->__invoke($valueHolder62f33, $this, 'initializeProxy', array(), $this->initializer54289) || 1) && $this->valueHolder62f33 = $valueHolder62f33;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder62f33;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder62f33;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
