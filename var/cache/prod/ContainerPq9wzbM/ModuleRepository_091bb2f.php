<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder39f75 = null;
    private $initializer5291d = null;
    private static $publicProperties8fa74 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getList', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getInstalledModules', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getMustBeConfiguredModules', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getUpgradableModules', array(), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'setActionUrls', array('collection' => $collection), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        return $this->valueHolder39f75->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer5291d = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder39f75) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder39f75 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder39f75->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer5291d && ($this->initializer5291d->__invoke($valueHolder39f75, $this, '__get', ['name' => $name], $this->initializer5291d) || 1) && $this->valueHolder39f75 = $valueHolder39f75;
        if (isset(self::$publicProperties8fa74[$name])) {
            return $this->valueHolder39f75->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
