<?php

namespace ServiceProxy\__PM__\Application\Service\UserManager;

class Generated7c10c4adb3a0401ef3aa88e5d75dd284 extends \Application\Service\UserManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder58a1b8975ae42968752865 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer58a1b8975b9b6561929878 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties58a1b89757aab750937994 = array(
        
    );

    private static $signature7c10c4adb3a0401ef3aa88e5d75dd284 = 'YTozOntzOjk6ImNsYXNzTmFtZSI7czozMToiQXBwbGljYXRpb25cU2VydmljZVxVc2VyTWFuYWdlciI7czo3OiJmYWN0b3J5IjtzOjUwOiJQcm94eU1hbmFnZXJcRmFjdG9yeVxMYXp5TG9hZGluZ1ZhbHVlSG9sZGVyRmFjdG9yeSI7czoxOToicHJveHlNYW5hZ2VyVmVyc2lvbiI7czo0NjoiMi4xLjBAZDllNWEwMGNhMmQ4N2I3ZTBmMWJmZjM2Yjg5N2UwMmFmZDdkNTQzNSI7fQ==';

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {
        $this->initializer58a1b8975b9b6561929878 && $this->initializer58a1b8975b9b6561929878->__invoke($this->valueHolder58a1b8975ae42968752865, $this, 'getStatus', array(), $this->initializer58a1b8975b9b6561929878);

        return $this->valueHolder58a1b8975ae42968752865->getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {
        $this->initializer58a1b8975b9b6561929878 && $this->initializer58a1b8975b9b6561929878->__invoke($this->valueHolder58a1b8975ae42968752865, $this, 'setStatus', array('status' => $status), $this->initializer58a1b8975b9b6561929878);

        return $this->valueHolder58a1b8975ae42968752865->setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function test()
    {
        $this->initializer58a1b8975b9b6561929878 && $this->initializer58a1b8975b9b6561929878->__invoke($this->valueHolder58a1b8975ae42968752865, $this, 'test', array(), $this->initializer58a1b8975b9b6561929878);

        return $this->valueHolder58a1b8975ae42968752865->test();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        $this->initializer58a1b8975b9b6561929878 && $this->initializer58a1b8975b9b6561929878->__invoke($this->valueHolder58a1b8975ae42968752865, $this, '__toString', array(), $this->initializer58a1b8975b9b6561929878);

        return $this->valueHolder58a1b8975ae42968752865->__toString();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        unset($instance->status);

        $instance->initializer58a1b8975b9b6561929878 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder58a1b8975ae42968752865) {
            $reflection = $reflection ?: new \ReflectionClass('Application\\Service\\UserManager');
            $this->valueHolder58a1b8975ae42968752865 = $reflection->newInstanceWithoutConstructor();
        unset($this->status);

        }

        $this->valueHolder58a1b8975ae42968752865->__construct();
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer58a1b8975b9b6561929878 && $this->initializer58a1b8975b9b6561929878->__invoke($this->valueHolder58a1b8975ae42968752865, $this, '__get', ['name' => $name], $this->initializer58a1b8975b9b6561929878);

        if (isset(self::$publicProperties58a1b89757aab750937994[$name])) {
            return $this->valueHolder58a1b8975ae42968752865->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58a1b8975ae42968752865;

            $backtrace = debug_backtrace(false);
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

        $targetObject = $this->valueHolder58a1b8975ae42968752865;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer58a1b8975b9b6561929878 && $this->initializer58a1b8975b9b6561929878->__invoke($this->valueHolder58a1b8975ae42968752865, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58a1b8975b9b6561929878);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58a1b8975ae42968752865;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder58a1b8975ae42968752865;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer58a1b8975b9b6561929878 && $this->initializer58a1b8975b9b6561929878->__invoke($this->valueHolder58a1b8975ae42968752865, $this, '__isset', array('name' => $name), $this->initializer58a1b8975b9b6561929878);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58a1b8975ae42968752865;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder58a1b8975ae42968752865;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer58a1b8975b9b6561929878 && $this->initializer58a1b8975b9b6561929878->__invoke($this->valueHolder58a1b8975ae42968752865, $this, '__unset', array('name' => $name), $this->initializer58a1b8975b9b6561929878);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58a1b8975ae42968752865;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder58a1b8975ae42968752865;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer58a1b8975b9b6561929878 && $this->initializer58a1b8975b9b6561929878->__invoke($this->valueHolder58a1b8975ae42968752865, $this, '__clone', array(), $this->initializer58a1b8975b9b6561929878);

        $this->valueHolder58a1b8975ae42968752865 = clone $this->valueHolder58a1b8975ae42968752865;
    }

    public function __sleep()
    {
        $this->initializer58a1b8975b9b6561929878 && $this->initializer58a1b8975b9b6561929878->__invoke($this->valueHolder58a1b8975ae42968752865, $this, '__sleep', array(), $this->initializer58a1b8975b9b6561929878);

        return array('valueHolder58a1b8975ae42968752865');
    }

    public function __wakeup()
    {
        unset($this->status);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer58a1b8975b9b6561929878 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer58a1b8975b9b6561929878;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer58a1b8975b9b6561929878 && $this->initializer58a1b8975b9b6561929878->__invoke($this->valueHolder58a1b8975ae42968752865, $this, 'initializeProxy', array(), $this->initializer58a1b8975b9b6561929878);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder58a1b8975ae42968752865;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder58a1b8975ae42968752865;
    }


}
