<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder04952 = null;
    private $initializeraa814 = null;
    private static $publicPropertiesfeb91 = [
        
    ];
    public function getConnection()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getConnection', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getMetadataFactory', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getExpressionBuilder', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'beginTransaction', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->beginTransaction();
    }
    public function getCache()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getCache', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getCache();
    }
    public function transactional($func)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'transactional', array('func' => $func), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'commit', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->commit();
    }
    public function rollback()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'rollback', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getClassMetadata', array('className' => $className), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'createQuery', array('dql' => $dql), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'createNamedQuery', array('name' => $name), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'createQueryBuilder', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'flush', array('entity' => $entity), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'clear', array('entityName' => $entityName), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->clear($entityName);
    }
    public function close()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'close', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->close();
    }
    public function persist($entity)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'persist', array('entity' => $entity), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'remove', array('entity' => $entity), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'refresh', array('entity' => $entity), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'detach', array('entity' => $entity), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'merge', array('entity' => $entity), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'contains', array('entity' => $entity), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getEventManager', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getConfiguration', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'isOpen', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getUnitOfWork', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getProxyFactory', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'initializeObject', array('obj' => $obj), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'getFilters', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'isFiltersStateClean', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'hasFilters', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return $this->valueHolder04952->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializeraa814 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder04952) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder04952 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder04952->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, '__get', ['name' => $name], $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        if (isset(self::$publicPropertiesfeb91[$name])) {
            return $this->valueHolder04952->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04952;
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
        $targetObject = $this->valueHolder04952;
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
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04952;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder04952;
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
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, '__isset', array('name' => $name), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04952;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder04952;
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
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, '__unset', array('name' => $name), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04952;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder04952;
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
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, '__clone', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        $this->valueHolder04952 = clone $this->valueHolder04952;
    }
    public function __sleep()
    {
        $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, '__sleep', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
        return array('valueHolder04952');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraa814 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraa814;
    }
    public function initializeProxy() : bool
    {
        return $this->initializeraa814 && ($this->initializeraa814->__invoke($valueHolder04952, $this, 'initializeProxy', array(), $this->initializeraa814) || 1) && $this->valueHolder04952 = $valueHolder04952;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder04952;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder04952;
    }
}
