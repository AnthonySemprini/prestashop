<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder39f75 = null;
    private $initializer5291d = null;
    private static $publicProperties8fa74 = [
        
    ];
    public function getConnection()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getConnection', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getMetadataFactory', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getExpressionBuilder', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'beginTransaction', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getCache', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'transactional', array('func' => $func), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'commit', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->commit();
    }
    public function rollback()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'rollback', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getClassMetadata', array('className' => $className), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'createQuery', array('dql' => $dql), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'createNamedQuery', array('name' => $name), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'createQueryBuilder', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'flush', array('entity' => $entity), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'clear', array('entityName' => $entityName), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->clear($entityName);
    }
    public function close()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'close', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->close();
    }
    public function persist($entity)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'persist', array('entity' => $entity), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'remove', array('entity' => $entity), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'refresh', array('entity' => $entity), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'detach', array('entity' => $entity), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'merge', array('entity' => $entity), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'contains', array('entity' => $entity), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getEventManager', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getConfiguration', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'isOpen', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getUnitOfWork', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getProxyFactory', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'initializeObject', array('obj' => $obj), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getFilters', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'isFiltersStateClean', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'hasFilters', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer5291d = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder39f75) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder39f75 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder39f75->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, '__get', ['name' => $name], $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        if (isset(self::$publicProperties8fa74[$name])) {
            return $this->valueHolder39f75->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39f75;
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
        $targetObject = $this->valueHolder39f75;
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
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39f75;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder39f75;
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
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, '__isset', array('name' => $name), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39f75;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder39f75;
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
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, '__unset', array('name' => $name), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39f75;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder39f75;
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
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, '__clone', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        $this->valueHolder39f75 = clone $this->valueHolder39f75;
    }
    public function __sleep()
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, '__sleep', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return array('valueHolder39f75');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5291d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5291d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'initializeProxy', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder39f75;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder39f75;
    }
}
