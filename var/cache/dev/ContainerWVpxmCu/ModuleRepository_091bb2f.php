<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder114c0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6288e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties95797 = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, 'getList', array(), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        return $this->valueHolder114c0->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, 'getInstalledModules', array(), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        return $this->valueHolder114c0->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, 'getMustBeConfiguredModules', array(), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        return $this->valueHolder114c0->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, 'getUpgradableModules', array(), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        return $this->valueHolder114c0->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        return $this->valueHolder114c0->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        return $this->valueHolder114c0->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, 'setActionUrls', array('collection' => $collection), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        return $this->valueHolder114c0->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        return $this->valueHolder114c0->clearCache($moduleName, $allShops);
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

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializer6288e = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder114c0) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder114c0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder114c0->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, '__get', ['name' => $name], $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        if (isset(self::$publicProperties95797[$name])) {
            return $this->valueHolder114c0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder114c0;

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

        $targetObject = $this->valueHolder114c0;
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
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder114c0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder114c0;
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
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, '__isset', array('name' => $name), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder114c0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder114c0;
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
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, '__unset', array('name' => $name), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder114c0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder114c0;
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
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, '__clone', array(), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        $this->valueHolder114c0 = clone $this->valueHolder114c0;
    }

    public function __sleep()
    {
        $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, '__sleep', array(), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;

        return array('valueHolder114c0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6288e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6288e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6288e && ($this->initializer6288e->__invoke($valueHolder114c0, $this, 'initializeProxy', array(), $this->initializer6288e) || 1) && $this->valueHolder114c0 = $valueHolder114c0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder114c0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder114c0;
    }
}
