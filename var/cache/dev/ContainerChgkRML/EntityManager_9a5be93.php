<?php

namespace ContainerChgkRML;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0bcdf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0be0a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4f26e = [
        
    ];

    public function getConnection()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getConnection', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getMetadataFactory', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getExpressionBuilder', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'beginTransaction', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getCache', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'transactional', array('func' => $func), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->transactional($func);
    }

    public function commit()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'commit', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->commit();
    }

    public function rollback()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'rollback', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getClassMetadata', array('className' => $className), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'createQuery', array('dql' => $dql), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'createNamedQuery', array('name' => $name), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'createQueryBuilder', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'flush', array('entity' => $entity), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'clear', array('entityName' => $entityName), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->clear($entityName);
    }

    public function close()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'close', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->close();
    }

    public function persist($entity)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'persist', array('entity' => $entity), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'remove', array('entity' => $entity), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'refresh', array('entity' => $entity), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'detach', array('entity' => $entity), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'merge', array('entity' => $entity), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'contains', array('entity' => $entity), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getEventManager', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getConfiguration', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'isOpen', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getUnitOfWork', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getProxyFactory', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'initializeObject', array('obj' => $obj), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'getFilters', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'isFiltersStateClean', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'hasFilters', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return $this->valueHolder0bcdf->hasFilters();
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

        $instance->initializer0be0a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0bcdf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0bcdf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0bcdf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, '__get', ['name' => $name], $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        if (isset(self::$publicProperties4f26e[$name])) {
            return $this->valueHolder0bcdf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0bcdf;

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

        $targetObject = $this->valueHolder0bcdf;
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
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0bcdf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0bcdf;
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
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, '__isset', array('name' => $name), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0bcdf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0bcdf;
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
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, '__unset', array('name' => $name), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0bcdf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0bcdf;
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
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, '__clone', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        $this->valueHolder0bcdf = clone $this->valueHolder0bcdf;
    }

    public function __sleep()
    {
        $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, '__sleep', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;

        return array('valueHolder0bcdf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0be0a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0be0a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0be0a && ($this->initializer0be0a->__invoke($valueHolder0bcdf, $this, 'initializeProxy', array(), $this->initializer0be0a) || 1) && $this->valueHolder0bcdf = $valueHolder0bcdf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0bcdf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0bcdf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
