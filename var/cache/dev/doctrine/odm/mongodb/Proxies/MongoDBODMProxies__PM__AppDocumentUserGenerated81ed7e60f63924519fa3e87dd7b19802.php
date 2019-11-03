<?php

namespace MongoDBODMProxies\__PM__\App\Document\User;

class Generated81ed7e60f63924519fa3e87dd7b19802 extends \App\Document\User implements \ProxyManager\Proxy\GhostObjectInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3557e = null;

    /**
     * @var bool tracks initialization status - true while the object is initializing
     */
    private $initializationTracker1497b = false;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb0e60 = [
        
    ];

    /**
     * @var array[][] visibility and default value of defined properties, indexed by
     * property name and class name
     */
    private static $privateProperties38497 = [
        'password' => [
            'App\\Document\\User' => true,
        ],
        'isAdmin' => [
            'App\\Document\\User' => true,
        ],
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedProperties6cec2 = [
        'firstname' => 'App\\Document\\User',
        'lastname' => 'App\\Document\\User',
        'email' => 'App\\Document\\User',
        'rawpassword' => 'App\\Document\\User',
        'creation_date' => 'App\\Document\\User',
    ];

    private static $signature81ed7e60f63924519fa3e87dd7b19802 = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czoxNzoiQXBwXERvY3VtZW50XFVzZXIiO3M6NzoiZmFjdG9yeSI7czo0NDoiUHJveHlNYW5hZ2VyXEZhY3RvcnlcTGF6eUxvYWRpbmdHaG9zdEZhY3RvcnkiO3M6MTk6InByb3h5TWFuYWdlclZlcnNpb24iO3M6NDY6IjIuMi4zQDRkMTU0NzQyZTMxYzM1MTM3ZDUzNzRjOTk4ZThmODZiNTRkYjJlMmYiO3M6MTI6InByb3h5T3B0aW9ucyI7YToxOntzOjE3OiJza2lwcGVkUHJvcGVydGllcyI7YToxOntpOjA7czo1OiIAKgBpZCI7fX19';

    /**
     * Triggers initialization logic for this ghost object
     *
     * @param string  $methodName
     * @param mixed[] $parameters
     *
     * @return mixed
     */
    private function callInitializer63212($methodName, array $parameters)
    {
        if ($this->initializationTracker1497b || ! $this->initializer3557e) {
            return;
        }

        $this->initializationTracker1497b = true;

        $this->firstname = NULL;
        $this->lastname = NULL;
        $this->email = NULL;
        $this->rawpassword = NULL;
        $this->creation_date = NULL;
        static $cacheApp_Document_User;

        $cacheApp_Document_User ?: $cacheApp_Document_User = \Closure::bind(function ($instance) {
            $instance->password = NULL;
            $instance->isAdmin = false;
        }, null, 'App\\Document\\User');

        $cacheApp_Document_User($this);




        $properties = [
            '' . "\0" . '*' . "\0" . 'firstname' => & $this->firstname,
            '' . "\0" . '*' . "\0" . 'lastname' => & $this->lastname,
            '' . "\0" . '*' . "\0" . 'email' => & $this->email,
            '' . "\0" . '*' . "\0" . 'rawpassword' => & $this->rawpassword,
            '' . "\0" . '*' . "\0" . 'creation_date' => & $this->creation_date,
        ];

        static $cacheFetchApp_Document_User;

        $cacheFetchApp_Document_User ?: $cacheFetchApp_Document_User = \Closure::bind(function ($instance, array & $properties) {
            $properties['' . "\0" . 'App\\Document\\User' . "\0" . 'password'] = & $instance->password;
            $properties['' . "\0" . 'App\\Document\\User' . "\0" . 'isAdmin'] = & $instance->isAdmin;
        }, $this, 'App\\Document\\User');

        $cacheFetchApp_Document_User($this, $properties);

        $result = $this->initializer3557e->__invoke($this, $methodName, $parameters, $this->initializer3557e, $properties);
        $this->initializationTracker1497b = false;

        return $result;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        unset($instance->firstname, $instance->lastname, $instance->email, $instance->rawpassword, $instance->creation_date);

        \Closure::bind(function (\App\Document\User $instance) {
            unset($instance->password, $instance->isAdmin);
        }, $instance, 'App\\Document\\User')->__invoke($instance);

        $instance->initializer3557e = $initializer;

        return $instance;
    }

    public function & __get($name)
    {
        $this->initializer3557e && ! $this->initializationTracker1497b && $this->callInitializer63212('__get', array('name' => $name));

        if (isset(self::$publicPropertiesb0e60[$name])) {
            return $this->$name;
        }

        if (isset(self::$protectedProperties6cec2[$name])) {
            if ($this->initializationTracker1497b) {
                return $this->$name;
            }

            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties6cec2[$name];

            if ($object instanceof $expectedType) {
                return $this->$name;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return $this->$name;
            }
        } elseif (isset(self::$privateProperties38497[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties38497[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $class);

                return $accessor($this);
            }

            if ($this->initializationTracker1497b || 'ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties38497[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

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

        $targetObject = unserialize(sprintf('O:%d:"%s":0:{}', strlen(get_parent_class($this)), get_parent_class($this)));
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer3557e && $this->callInitializer63212('__set', array('name' => $name, 'value' => $value));

        if (isset(self::$publicPropertiesb0e60[$name])) {
            return ($this->$name = $value);
        }

        if (isset(self::$protectedProperties6cec2[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties6cec2[$name];

            if ($object instanceof $expectedType) {
                return ($this->$name = $value);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return ($this->$name = $value);
            }
        } elseif (isset(self::$privateProperties38497[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties38497[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $class);

                return $accessor($this, $value);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties38497[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $tmpClass);

                return $accessor($this, $value);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = unserialize(sprintf('O:%d:"%s":0:{}', strlen(get_parent_class($this)), get_parent_class($this)));
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer3557e && $this->callInitializer63212('__isset', array('name' => $name));

        if (isset(self::$publicPropertiesb0e60[$name])) {
            return isset($this->$name);
        }

        if (isset(self::$protectedProperties6cec2[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties6cec2[$name];

            if ($object instanceof $expectedType) {
                return isset($this->$name);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType)) {
                return isset($this->$name);
            }
        } else {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties38497[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties38497[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = unserialize(sprintf('O:%d:"%s":0:{}', strlen(get_parent_class($this)), get_parent_class($this)));
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer3557e && $this->callInitializer63212('__unset', array('name' => $name));

        if (isset(self::$publicPropertiesb0e60[$name])) {
            unset($this->$name);

            return;
        }

        if (isset(self::$protectedProperties6cec2[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties6cec2[$name];

            if ($object instanceof $expectedType) {
                unset($this->$name);

                return;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                unset($this->$name);

                return;
            }
        } elseif (isset(self::$privateProperties38497[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties38497[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties38497[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            unset($targetObject->$name);
            return;
        }

        $targetObject = unserialize(sprintf('O:%d:"%s":0:{}', strlen(get_parent_class($this)), get_parent_class($this)));
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
        $this->initializer3557e && $this->callInitializer63212('__clone', []);
    }

    public function __sleep()
    {
        $this->initializer3557e && $this->callInitializer63212('__sleep', []);

        return array_keys((array) $this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer3557e = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer3557e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3557e && $this->callInitializer63212('initializeProxy', []);
    }

    public function isProxyInitialized() : bool
    {
        return ! $this->initializer3557e;
    }


}
