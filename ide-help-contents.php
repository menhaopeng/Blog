<?php
/**
 * Laravel 5.2 静态方法 IDE 提示支持
 * @author 邹义良 <190196539@qq.com>
 */

namespace {

class App extends \Illuminate\Foundation\Application{
	public static function version(){}
	public static function bootstrapWith($bootstrappers){}
	public static function afterLoadingEnvironment($callback){}
	public static function beforeBootstrapping($bootstrapper , $callback){}
	public static function afterBootstrapping($bootstrapper , $callback){}
	public static function hasBeenBootstrapped(){}
	public static function setBasePath($basePath){}
	public static function path(){}
	public static function basePath(){}
	public static function configPath(){}
	public static function databasePath(){}
	public static function useDatabasePath($path){}
	public static function langPath(){}
	public static function publicPath(){}
	public static function storagePath(){}
	public static function useStoragePath($path){}
	public static function environmentPath(){}
	public static function useEnvironmentPath($path){}
	public static function loadEnvironmentFrom($file){}
	public static function environmentFile(){}
	public static function environment(){}
	public static function isLocal(){}
	public static function detectEnvironment($callback){}
	public static function runningInConsole(){}
	public static function runningUnitTests(){}
	public static function registerConfiguredProviders(){}
	public static function register($provider , $options = array ( ) , $force = false){}
	public static function getProvider($provider){}
	public static function resolveProviderClass($provider){}
	public static function loadDeferredProviders(){}
	public static function loadDeferredProvider($service){}
	public static function registerDeferredProvider($provider , $service = NULL){}
	public static function make($abstract , $parameters = array ( )){}
	public static function bound($abstract){}
	public static function isBooted(){}
	public static function boot(){}
	public static function booting($callback){}
	public static function booted($callback){}
	public static function handle($request , $type = 1 , $catch = true){}
	public static function shouldSkipMiddleware(){}
	public static function configurationIsCached(){}
	public static function getCachedConfigPath(){}
	public static function routesAreCached(){}
	public static function getCachedRoutesPath(){}
	public static function getCachedCompilePath(){}
	public static function getCachedServicesPath(){}
	public static function isDownForMaintenance(){}
	public static function abort($code , $message = '' , $headers = array ( )){}
	public static function terminating($callback){}
	public static function terminate(){}
	public static function getLoadedProviders(){}
	public static function getDeferredServices(){}
	public static function setDeferredServices($services){}
	public static function addDeferredServices($services){}
	public static function isDeferredService($service){}
	public static function configureMonologUsing($callback){}
	public static function hasMonologConfigurator(){}
	public static function getMonologConfigurator(){}
	public static function getLocale(){}
	public static function setLocale($locale){}
	public static function registerCoreContainerAliases(){}
	public static function flush(){}
	public static function getNamespace(){}
	public static function when($concrete){}
	public static function resolved($abstract){}
	public static function isAlias($name){}
	public static function bind($abstract , $concrete = NULL , $shared = false){}
	public static function addContextualBinding($concrete , $abstract , $implementation){}
	public static function bindIf($abstract , $concrete = NULL , $shared = false){}
	public static function singleton($abstract , $concrete = NULL){}
	public static function share($closure){}
	public static function extend($abstract , $closure){}
	public static function instance($abstract , $instance){}
	public static function tag($abstracts , $tags){}
	public static function tagged($tag){}
	public static function alias($abstract , $alias){}
	public static function rebinding($abstract , $callback){}
	public static function refresh($abstract , $target , $method){}
	public static function wrap($callback , $parameters = array ( )){}
	public static function call($callback , $parameters = array ( ) , $defaultMethod = NULL){}
	public static function build($concrete , $parameters = array ( )){}
	public static function resolving($abstract , $callback = NULL){}
	public static function afterResolving($abstract , $callback = NULL){}
	public static function isShared($abstract){}
	public static function getBindings(){}
	public static function forgetInstance($abstract){}
	public static function forgetInstances(){}
	public static function getInstance(){}
	public static function setInstance($container){}
	public static function offsetExists($key){}
	public static function offsetGet($key){}
	public static function offsetSet($key , $value){}
	public static function offsetUnset($key){}
}

class Artisan extends \Illuminate\Console\Application{
	public static function call($command , $parameters = array ( )){}
	public static function output(){}
	public static function add($command){}
	public static function resolve($command){}
	public static function resolveCommands($commands){}
	public static function getLaravel(){}
	public static function setDispatcher($dispatcher){}
	public static function run($input = NULL , $output = NULL){}
	public static function doRun($input , $output){}
	public static function setHelperSet($helperSet){}
	public static function getHelperSet(){}
	public static function setDefinition($definition){}
	public static function getDefinition(){}
	public static function getHelp(){}
	public static function setCatchExceptions($boolean){}
	public static function setAutoExit($boolean){}
	public static function getName(){}
	public static function setName($name){}
	public static function getVersion(){}
	public static function setVersion($version){}
	public static function getLongVersion(){}
	public static function register($name){}
	public static function addCommands($commands){}
	public static function get($name){}
	public static function has($name){}
	public static function getNamespaces(){}
	public static function findNamespace($namespace){}
	public static function find($name){}
	public static function all($namespace = NULL){}
	public static function getAbbreviations($names){}
	public static function renderException($e , $output){}
	public static function getTerminalDimensions(){}
	public static function setTerminalDimensions($width , $height){}
	public static function extractNamespace($name , $limit = NULL){}
	public static function setDefaultCommand($commandName){}
}

class Auth extends \Illuminate\Contracts\Auth\Guard{
	public static function check(){}
	public static function guest(){}
	public static function user(){}
	public static function id(){}
	public static function validate($credentials = array ( )){}
	public static function setUser($user){}
}

class Auth extends \Illuminate\Auth\AuthManager{
	public static function guard($name = NULL){}
	public static function createSessionDriver($name , $config){}
	public static function createTokenDriver($name , $config){}
	public static function getDefaultDriver(){}
	public static function shouldUse($name){}
	public static function setDefaultDriver($name){}
	public static function viaRequest($driver , $callback){}
	public static function userResolver(){}
	public static function resolveUsersUsing($userResolver){}
	public static function extend($driver , $callback){}
	public static function provider($name , $callback){}
	public static function createUserProvider($provider){}
}

class Blade extends \Illuminate\View\Compilers\BladeCompiler{
	public static function compile($path = NULL){}
	public static function getPath(){}
	public static function setPath($path){}
	public static function compileString($value){}
	public static function compileEchoDefaults($value){}
	public static function getExtensions(){}
	public static function extend($compiler){}
	public static function directive($name , $handler){}
	public static function getCustomDirectives(){}
	public static function getRawTags(){}
	public static function setRawTags($openTag , $closeTag){}
	public static function setContentTags($openTag , $closeTag , $escaped = false){}
	public static function setEscapedContentTags($openTag , $closeTag){}
	public static function getContentTags(){}
	public static function getEscapedContentTags(){}
	public static function setEchoFormat($format){}
	public static function getCompiledPath($path){}
	public static function isExpired($path){}
}

class Cache extends \Illuminate\Cache\Repository{
	public static function setEventDispatcher($events){}
	public static function has($key){}
	public static function get($key , $default = NULL){}
	public static function many($keys){}
	public static function pull($key , $default = NULL){}
	public static function put($key , $value , $minutes = NULL){}
	public static function putMany($values , $minutes){}
	public static function add($key , $value , $minutes){}
	public static function forever($key , $value){}
	public static function remember($key , $minutes , $callback){}
	public static function sear($key , $callback){}
	public static function rememberForever($key , $callback){}
	public static function forget($key){}
	public static function tags($names){}
	public static function getDefaultCacheTime(){}
	public static function setDefaultCacheTime($minutes){}
	public static function getStore(){}
	public static function offsetExists($key){}
	public static function offsetGet($key){}
	public static function offsetSet($key , $value){}
	public static function offsetUnset($key){}
	public static function macro($name , $macro){}
	public static function hasMacro($name){}
	public static function macroCall($method , $parameters){}
}

class Config extends \Illuminate\Config\Repository{
	public static function has($key){}
	public static function get($key , $default = NULL){}
	public static function set($key , $value = NULL){}
	public static function prepend($key , $value){}
	public static function push($key , $value){}
	public static function all(){}
	public static function offsetExists($key){}
	public static function offsetGet($key){}
	public static function offsetSet($key , $value){}
	public static function offsetUnset($key){}
}

class Cookie extends \Illuminate\Cookie\CookieJar{
	public static function make($name , $value , $minutes = 0 , $path = NULL , $domain = NULL , $secure = false , $httpOnly = true){}
	public static function forever($name , $value , $path = NULL , $domain = NULL , $secure = false , $httpOnly = true){}
	public static function forget($name , $path = NULL , $domain = NULL){}
	public static function hasQueued($key){}
	public static function queued($key , $default = NULL){}
	public static function queue(){}
	public static function unqueue($name){}
	public static function setDefaultPathAndDomain($path , $domain , $secure = false){}
	public static function getQueuedCookies(){}
}

class Crypt extends \Illuminate\Encryption\Encrypter{
	public static function supported($key , $cipher){}
	public static function encrypt($value){}
	public static function decrypt($payload){}
}

class DB extends \Illuminate\Database\Connection{
	public static function useDefaultQueryGrammar(){}
	public static function useDefaultSchemaGrammar(){}
	public static function useDefaultPostProcessor(){}
	public static function getSchemaBuilder(){}
	public static function table($table){}
	public static function query(){}
	public static function raw($value){}
	public static function selectOne($query , $bindings = array ( )){}
	public static function selectFromWriteConnection($query , $bindings = array ( )){}
	public static function select($query , $bindings = array ( ) , $useReadPdo = true){}
	public static function insert($query , $bindings = array ( )){}
	public static function update($query , $bindings = array ( )){}
	public static function delete($query , $bindings = array ( )){}
	public static function statement($query , $bindings = array ( )){}
	public static function affectingStatement($query , $bindings = array ( )){}
	public static function unprepared($query){}
	public static function prepareBindings($bindings){}
	public static function transaction($callback){}
	public static function beginTransaction(){}
	public static function commit(){}
	public static function rollBack(){}
	public static function transactionLevel(){}
	public static function pretend($callback){}
	public static function disconnect(){}
	public static function reconnect(){}
	public static function logQuery($query , $bindings , $time = NULL){}
	public static function listen($callback){}
	public static function isDoctrineAvailable(){}
	public static function getDoctrineColumn($table , $column){}
	public static function getDoctrineSchemaManager(){}
	public static function getDoctrineConnection(){}
	public static function getPdo(){}
	public static function getReadPdo(){}
	public static function setPdo($pdo){}
	public static function setReadPdo($pdo){}
	public static function setReconnector($reconnector){}
	public static function getName(){}
	public static function getConfig($option){}
	public static function getDriverName(){}
	public static function getQueryGrammar(){}
	public static function setQueryGrammar($grammar){}
	public static function getSchemaGrammar(){}
	public static function setSchemaGrammar($grammar){}
	public static function getPostProcessor(){}
	public static function setPostProcessor($processor){}
	public static function getEventDispatcher(){}
	public static function setEventDispatcher($events){}
	public static function pretending(){}
	public static function getFetchMode(){}
	public static function getFetchArgument(){}
	public static function getFetchConstructorArgument(){}
	public static function setFetchMode($fetchMode , $fetchArgument = NULL , $fetchConstructorArgument = array ( )){}
	public static function getQueryLog(){}
	public static function flushQueryLog(){}
	public static function enableQueryLog(){}
	public static function disableQueryLog(){}
	public static function logging(){}
	public static function getDatabaseName(){}
	public static function setDatabaseName($database){}
	public static function getTablePrefix(){}
	public static function setTablePrefix($prefix){}
	public static function withTablePrefix($grammar){}
}

class DB extends \Illuminate\Database\DatabaseManager{
	public static function connection($name = NULL){}
	public static function purge($name = NULL){}
	public static function disconnect($name = NULL){}
	public static function reconnect($name = NULL){}
	public static function getDefaultConnection(){}
	public static function setDefaultConnection($name){}
	public static function supportedDrivers(){}
	public static function availableDrivers(){}
	public static function extend($name , $resolver){}
	public static function getConnections(){}
}

class Eloquent extends \Illuminate\Database\Eloquent\Model{
	public static function clearBootedModels(){}
	public static function addGlobalScope($scope , $implementation = NULL){}
	public static function hasGlobalScope($scope){}
	public static function getGlobalScope($scope){}
	public static function getGlobalScopes(){}
	public static function observe($class , $priority = 0){}
	public static function fill($attributes){}
	public static function forceFill($attributes){}
	public static function newInstance($attributes = array ( ) , $exists = false){}
	public static function newFromBuilder($attributes = array ( ) , $connection = NULL){}
	public static function hydrate($items , $connection = NULL){}
	public static function hydrateRaw($query , $bindings = array ( ) , $connection = NULL){}
	public static function create($attributes = array ( )){}
	public static function forceCreate($attributes){}
	public static function firstOrCreate($attributes){}
	public static function firstOrNew($attributes){}
	public static function updateOrCreate($attributes , $values = array ( ) , $options = array ( )){}
	public static function query(){}
	public static function on($connection = NULL){}
	public static function onWriteConnection(){}
	public static function all($columns = array (   0 => '*', )){}
	public static function findOrNew($id , $columns = array (   0 => '*', )){}
	public static function fresh($with = array ( )){}
	public static function load($relations){}
	public static function with($relations){}
	public static function append($attributes){}
	public static function hasOne($related , $foreignKey = NULL , $localKey = NULL){}
	public static function morphOne($related , $name , $type = NULL , $id = NULL , $localKey = NULL){}
	public static function belongsTo($related , $foreignKey = NULL , $otherKey = NULL , $relation = NULL){}
	public static function morphTo($name = NULL , $type = NULL , $id = NULL){}
	public static function getActualClassNameForMorph($class){}
	public static function hasMany($related , $foreignKey = NULL , $localKey = NULL){}
	public static function hasManyThrough($related , $through , $firstKey = NULL , $secondKey = NULL , $localKey = NULL){}
	public static function morphMany($related , $name , $type = NULL , $id = NULL , $localKey = NULL){}
	public static function belongsToMany($related , $table = NULL , $foreignKey = NULL , $otherKey = NULL , $relation = NULL){}
	public static function morphToMany($related , $name , $table = NULL , $foreignKey = NULL , $otherKey = NULL , $inverse = false){}
	public static function morphedByMany($related , $name , $table = NULL , $foreignKey = NULL , $otherKey = NULL){}
	public static function joiningTable($related){}
	public static function destroy($ids){}
	public static function delete(){}
	public static function forceDelete(){}
	public static function saving($callback , $priority = 0){}
	public static function saved($callback , $priority = 0){}
	public static function updating($callback , $priority = 0){}
	public static function updated($callback , $priority = 0){}
	public static function creating($callback , $priority = 0){}
	public static function created($callback , $priority = 0){}
	public static function deleting($callback , $priority = 0){}
	public static function deleted($callback , $priority = 0){}
	public static function flushEventListeners(){}
	public static function getObservableEvents(){}
	public static function setObservableEvents($observables){}
	public static function addObservableEvents($observables){}
	public static function removeObservableEvents($observables){}
	public static function update($attributes = array ( ) , $options = array ( )){}
	public static function push(){}
	public static function save($options = array ( )){}
	public static function saveOrFail($options = array ( )){}
	public static function touchOwners(){}
	public static function touches($relation){}
	public static function touch(){}
	public static function setCreatedAt($value){}
	public static function setUpdatedAt($value){}
	public static function getCreatedAtColumn(){}
	public static function getUpdatedAtColumn(){}
	public static function freshTimestamp(){}
	public static function freshTimestampString(){}
	public static function newQuery(){}
	public static function newQueryWithoutScope($scope){}
	public static function newQueryWithoutScopes(){}
	public static function newEloquentBuilder($query){}
	public static function newCollection($models = array ( )){}
	public static function newPivot($parent , $attributes , $table , $exists){}
	public static function getTable(){}
	public static function setTable($table){}
	public static function getKey(){}
	public static function getQueueableId(){}
	public static function getKeyName(){}
	public static function setKeyName($key){}
	public static function getQualifiedKeyName(){}
	public static function getRouteKey(){}
	public static function getRouteKeyName(){}
	public static function usesTimestamps(){}
	public static function getMorphClass(){}
	public static function getPerPage(){}
	public static function setPerPage($perPage){}
	public static function getForeignKey(){}
	public static function getHidden(){}
	public static function setHidden($hidden){}
	public static function addHidden($attributes = NULL){}
	public static function makeVisible($attributes){}
	public static function withHidden($attributes){}
	public static function getVisible(){}
	public static function setVisible($visible){}
	public static function addVisible($attributes = NULL){}
	public static function setAppends($appends){}
	public static function getFillable(){}
	public static function fillable($fillable){}
	public static function getGuarded(){}
	public static function guard($guarded){}
	public static function unguard($state = true){}
	public static function reguard(){}
	public static function isUnguarded(){}
	public static function unguarded($callback){}
	public static function isFillable($key){}
	public static function isGuarded($key){}
	public static function totallyGuarded(){}
	public static function getTouchedRelations(){}
	public static function setTouchedRelations($touches){}
	public static function getIncrementing(){}
	public static function setIncrementing($value){}
	public static function toJson($options = 0){}
	public static function jsonSerialize(){}
	public static function toArray(){}
	public static function attributesToArray(){}
	public static function relationsToArray(){}
	public static function getAttribute($key){}
	public static function getAttributeValue($key){}
	public static function getRelationValue($key){}
	public static function hasGetMutator($key){}
	public static function hasCast($key , $types = NULL){}
	public static function getCasts(){}
	public static function setAttribute($key , $value){}
	public static function hasSetMutator($key){}
	public static function getDates(){}
	public static function fromDateTime($value){}
	public static function setDateFormat($format){}
	public static function fromJson($value , $asObject = false){}
	public static function replicate($except = NULL){}
	public static function getAttributes(){}
	public static function setRawAttributes($attributes , $sync = false){}
	public static function getOriginal($key = NULL , $default = NULL){}
	public static function syncOriginal(){}
	public static function syncOriginalAttribute($attribute){}
	public static function isDirty($attributes = NULL){}
	public static function getDirty(){}
	public static function getRelations(){}
	public static function getRelation($relation){}
	public static function relationLoaded($key){}
	public static function setRelation($relation , $value){}
	public static function setRelations($relations){}
	public static function getConnection(){}
	public static function getConnectionName(){}
	public static function setConnection($name){}
	public static function resolveConnection($connection = NULL){}
	public static function getConnectionResolver(){}
	public static function setConnectionResolver($resolver){}
	public static function unsetConnectionResolver(){}
	public static function getEventDispatcher(){}
	public static function setEventDispatcher($dispatcher){}
	public static function unsetEventDispatcher(){}
	public static function getMutatedAttributes(){}
	public static function cacheMutatedAttributes($class){}
	public static function offsetExists($offset){}
	public static function offsetGet($offset){}
	public static function offsetSet($offset , $value){}
	public static function offsetUnset($offset){}
}

class Gate extends \Illuminate\Contracts\Auth\Access\Gate{
	public static function has($ability){}
	public static function define($ability , $callback){}
	public static function policy($class , $policy){}
	public static function before($callback){}
	public static function allows($ability , $arguments = array ( )){}
	public static function denies($ability , $arguments = array ( )){}
	public static function check($ability , $arguments = array ( )){}
	public static function forUser($user){}
}

class Event extends \Illuminate\Events\Dispatcher{
	public static function listen($events , $listener , $priority = 0){}
	public static function hasListeners($eventName){}
	public static function push($event , $payload = array ( )){}
	public static function subscribe($subscriber){}
	public static function until($event , $payload = array ( )){}
	public static function flush($event){}
	public static function firing(){}
	public static function fire($event , $payload = array ( ) , $halt = false){}
	public static function getListeners($eventName){}
	public static function makeListener($listener){}
	public static function createClassListener($listener){}
	public static function forget($event){}
	public static function forgetPushed(){}
	public static function setQueueResolver($resolver){}
}

class File extends \Illuminate\Filesystem\Filesystem{
	public static function exists($path){}
	public static function get($path){}
	public static function getRequire($path){}
	public static function requireOnce($file){}
	public static function put($path , $contents , $lock = false){}
	public static function prepend($path , $data){}
	public static function append($path , $data){}
	public static function delete($paths){}
	public static function move($path , $target){}
	public static function copy($path , $target){}
	public static function name($path){}
	public static function extension($path){}
	public static function type($path){}
	public static function mimeType($path){}
	public static function size($path){}
	public static function lastModified($path){}
	public static function isDirectory($directory){}
	public static function isWritable($path){}
	public static function isFile($file){}
	public static function glob($pattern , $flags = 0){}
	public static function files($directory){}
	public static function allFiles($directory){}
	public static function directories($directory){}
	public static function makeDirectory($path , $mode = 493 , $recursive = false , $force = false){}
	public static function copyDirectory($directory , $destination , $options = NULL){}
	public static function deleteDirectory($directory , $preserve = false){}
	public static function cleanDirectory($directory){}
	public static function macro($name , $macro){}
	public static function hasMacro($name){}
}

class Hash extends \Illuminate\Contracts\Hashing\Hasher{
	public static function make($value , $options = array ( )){}
	public static function check($value , $hashedValue , $options = array ( )){}
	public static function needsRehash($hashedValue , $options = array ( )){}
}

class Lang extends \Illuminate\Translation\Translator{
	public static function hasForLocale($key , $locale = NULL){}
	public static function has($key , $locale = NULL , $fallback = true){}
	public static function get($key , $replace = array ( ) , $locale = NULL , $fallback = true){}
	public static function choice($key , $number , $replace = array ( ) , $locale = NULL){}
	public static function trans($id , $parameters = array ( ) , $domain = 'messages' , $locale = NULL){}
	public static function transChoice($id , $number , $parameters = array ( ) , $domain = 'messages' , $locale = NULL){}
	public static function load($namespace , $group , $locale){}
	public static function addNamespace($namespace , $hint){}
	public static function parseKey($key){}
	public static function getSelector(){}
	public static function setSelector($selector){}
	public static function getLoader(){}
	public static function locale(){}
	public static function getLocale(){}
	public static function setLocale($locale){}
	public static function getFallback(){}
	public static function setFallback($fallback){}
	public static function setParsedKey($key , $parsed){}
}

class Log extends \Illuminate\Log\Writer{
	public static function emergency($message , $context = array ( )){}
	public static function alert($message , $context = array ( )){}
	public static function critical($message , $context = array ( )){}
	public static function error($message , $context = array ( )){}
	public static function warning($message , $context = array ( )){}
	public static function notice($message , $context = array ( )){}
	public static function info($message , $context = array ( )){}
	public static function debug($message , $context = array ( )){}
	public static function log($level , $message , $context = array ( )){}
	public static function write($level , $message , $context = array ( )){}
	public static function useFiles($path , $level = 'debug'){}
	public static function useDailyFiles($path , $days = 0 , $level = 'debug'){}
	public static function useSyslog($name = 'laravel' , $level = 'debug'){}
	public static function useErrorLog($level = 'debug' , $messageType = 0){}
	public static function listen($callback){}
	public static function getMonolog(){}
	public static function getEventDispatcher(){}
	public static function setEventDispatcher($dispatcher){}
}

class Mail extends \Illuminate\Mail\Mailer{
	public static function alwaysFrom($address , $name = NULL){}
	public static function alwaysTo($address , $name = NULL){}
	public static function raw($text , $callback){}
	public static function plain($view , $data , $callback){}
	public static function send($view , $data , $callback){}
	public static function queue($view , $data , $callback , $queue = NULL){}
	public static function onQueue($queue , $view , $data , $callback){}
	public static function queueOn($queue , $view , $data , $callback){}
	public static function later($delay , $view , $data , $callback , $queue = NULL){}
	public static function laterOn($queue , $delay , $view , $data , $callback){}
	public static function handleQueuedMessage($job , $data){}
	public static function getViewFactory(){}
	public static function getSwiftMailer(){}
	public static function failures(){}
	public static function setSwiftMailer($swift){}
	public static function setQueue($queue){}
	public static function setContainer($container){}
}

class Password extends \Illuminate\Auth\Passwords\PasswordBroker{
	public static function sendResetLink($credentials , $callback = NULL){}
	public static function emailResetLink($user , $token , $callback = NULL){}
	public static function reset($credentials , $callback){}
	public static function validator($callback){}
	public static function validateNewPassword($credentials){}
	public static function getUser($credentials){}
	public static function getRepository(){}
}

class Queue extends \Illuminate\Contracts\Queue\Queue{
	public static function push($job , $data = '' , $queue = NULL){}
	public static function pushRaw($payload , $queue = NULL , $options = array ( )){}
	public static function later($delay , $job , $data = '' , $queue = NULL){}
	public static function pushOn($queue , $job , $data = ''){}
	public static function laterOn($queue , $delay , $job , $data = ''){}
	public static function pop($queue = NULL){}
}

class Queue extends \Illuminate\Queue\QueueManager{
	public static function after($callback){}
	public static function looping($callback){}
	public static function failing($callback){}
	public static function stopping($callback){}
	public static function connected($name = NULL){}
	public static function connection($name = NULL){}
	public static function extend($driver , $resolver){}
	public static function addConnector($driver , $resolver){}
	public static function getDefaultDriver(){}
	public static function setDefaultDriver($name){}
	public static function getName($connection = NULL){}
	public static function isDownForMaintenance(){}
}

class Queue extends \Illuminate\Queue\Queue{
	public static function pushOn($queue , $job , $data = ''){}
	public static function laterOn($queue , $delay , $job , $data = ''){}
	public static function bulk($jobs , $data = '' , $queue = NULL){}
	public static function setContainer($container){}
	public static function setEncrypter($crypt){}
}

class Redirect extends \Illuminate\Routing\Redirector{
	public static function home($status = 302){}
	public static function back($status = 302 , $headers = array ( )){}
	public static function refresh($status = 302 , $headers = array ( )){}
	public static function guest($path , $status = 302 , $headers = array ( ) , $secure = NULL){}
	public static function intended($default = '/' , $status = 302 , $headers = array ( ) , $secure = NULL){}
	public static function to($path , $status = 302 , $headers = array ( ) , $secure = NULL){}
	public static function away($path , $status = 302 , $headers = array ( )){}
	public static function secure($path , $status = 302 , $headers = array ( )){}
	public static function route($route , $parameters = array ( ) , $status = 302 , $headers = array ( )){}
	public static function action($action , $parameters = array ( ) , $status = 302 , $headers = array ( )){}
	public static function getUrlGenerator(){}
	public static function setSession($session){}
}

class Redis extends \Illuminate\Redis\Database{
	public static function connection($name = 'default'){}
	public static function command($method , $parameters = array ( )){}
	public static function subscribe($channels , $callback , $connection = NULL , $method = 'subscribe'){}
	public static function psubscribe($channels , $callback , $connection = NULL){}
}

class Request extends \Illuminate\Http\Request{
	public static function capture(){}
	public static function instance(){}
	public static function method(){}
	public static function root(){}
	public static function url(){}
	public static function fullUrl(){}
	public static function path(){}
	public static function decodedPath(){}
	public static function segment($index , $default = NULL){}
	public static function segments(){}
	public static function is(){}
	public static function fullUrlIs(){}
	public static function ajax(){}
	public static function pjax(){}
	public static function secure(){}
	public static function ip(){}
	public static function ips(){}
	public static function exists($key){}
	public static function has($key){}
	public static function all(){}
	public static function input($key = NULL , $default = NULL){}
	public static function only($keys){}
	public static function except($keys){}
	public static function query($key = NULL , $default = NULL){}
	public static function hasCookie($key){}
	public static function cookie($key = NULL , $default = NULL){}
	public static function allFiles(){}
	public static function file($key = NULL , $default = NULL){}
	public static function hasFile($key){}
	public static function header($key = NULL , $default = NULL){}
	public static function server($key = NULL , $default = NULL){}
	public static function old($key = NULL , $default = NULL){}
	public static function flash($filter = NULL , $keys = array ( )){}
	public static function flashOnly($keys){}
	public static function flashExcept($keys){}
	public static function flush(){}
	public static function merge($input){}
	public static function replace($input){}
	public static function json($key = NULL , $default = NULL){}
	public static function matchesType($actual , $type){}
	public static function isJson(){}
	public static function wantsJson(){}
	public static function accepts($contentTypes){}
	public static function prefers($contentTypes){}
	public static function acceptsJson(){}
	public static function acceptsHtml(){}
	public static function format($default = 'html'){}
	public static function bearerToken(){}
	public static function createFromBase($request){}
	public static function duplicate($query = NULL , $request = NULL , $attributes = NULL , $cookies = NULL , $files = NULL , $server = NULL){}
	public static function session(){}
	public static function user($guard = NULL){}
	public static function route($param = NULL){}
	public static function fingerprint(){}
	public static function getUserResolver(){}
	public static function setUserResolver($callback){}
	public static function getRouteResolver(){}
	public static function setRouteResolver($callback){}
	public static function toArray(){}
	public static function offsetExists($offset){}
	public static function offsetGet($offset){}
	public static function offsetSet($offset , $value){}
	public static function offsetUnset($offset){}
	public static function initialize($query = array ( ) , $request = array ( ) , $attributes = array ( ) , $cookies = array ( ) , $files = array ( ) , $server = array ( ) , $content = NULL){}
	public static function createFromGlobals(){}
	public static function create($uri , $method = 'GET' , $parameters = array ( ) , $cookies = array ( ) , $files = array ( ) , $server = array ( ) , $content = NULL){}
	public static function setFactory($callable){}
	public static function overrideGlobals(){}
	public static function setTrustedProxies($proxies){}
	public static function getTrustedProxies(){}
	public static function setTrustedHosts($hostPatterns){}
	public static function getTrustedHosts(){}
	public static function setTrustedHeaderName($key , $value){}
	public static function getTrustedHeaderName($key){}
	public static function normalizeQueryString($qs){}
	public static function enableHttpMethodParameterOverride(){}
	public static function getHttpMethodParameterOverride(){}
	public static function get($key , $default = NULL){}
	public static function getSession(){}
	public static function hasPreviousSession(){}
	public static function hasSession(){}
	public static function setSession($session){}
	public static function getClientIps(){}
	public static function getClientIp(){}
	public static function getScriptName(){}
	public static function getPathInfo(){}
	public static function getBasePath(){}
	public static function getBaseUrl(){}
	public static function getScheme(){}
	public static function getPort(){}
	public static function getUser(){}
	public static function getPassword(){}
	public static function getUserInfo(){}
	public static function getHttpHost(){}
	public static function getRequestUri(){}
	public static function getSchemeAndHttpHost(){}
	public static function getUri(){}
	public static function getUriForPath($path){}
	public static function getRelativeUriForPath($path){}
	public static function getQueryString(){}
	public static function isSecure(){}
	public static function getHost(){}
	public static function setMethod($method){}
	public static function getMethod(){}
	public static function getRealMethod(){}
	public static function getMimeType($format){}
	public static function getFormat($mimeType){}
	public static function setFormat($format , $mimeTypes){}
	public static function getRequestFormat($default = 'html'){}
	public static function setRequestFormat($format){}
	public static function getContentType(){}
	public static function setDefaultLocale($locale){}
	public static function getDefaultLocale(){}
	public static function setLocale($locale){}
	public static function getLocale(){}
	public static function isMethod($method){}
	public static function isMethodSafe(){}
	public static function getContent($asResource = false){}
	public static function getETags(){}
	public static function isNoCache(){}
	public static function getPreferredLanguage($locales = NULL){}
	public static function getLanguages(){}
	public static function getCharsets(){}
	public static function getEncodings(){}
	public static function getAcceptableContentTypes(){}
	public static function isXmlHttpRequest(){}
	public static function macro($name , $macro){}
	public static function hasMacro($name){}
}

class Response extends \Illuminate\Contracts\Routing\ResponseFactory{
	public static function make($content = '' , $status = 200 , $headers = array ( )){}
	public static function view($view , $data = array ( ) , $status = 200 , $headers = array ( )){}
	public static function json($data = array ( ) , $status = 200 , $headers = array ( ) , $options = 0){}
	public static function jsonp($callback , $data = array ( ) , $status = 200 , $headers = array ( ) , $options = 0){}
	public static function stream($callback , $status = 200 , $headers = array ( )){}
	public static function download($file , $name = NULL , $headers = array ( ) , $disposition = 'attachment'){}
	public static function redirectTo($path , $status = 302 , $headers = array ( ) , $secure = NULL){}
	public static function redirectToRoute($route , $parameters = array ( ) , $status = 302 , $headers = array ( )){}
	public static function redirectToAction($action , $parameters = array ( ) , $status = 302 , $headers = array ( )){}
	public static function redirectGuest($path , $status = 302 , $headers = array ( ) , $secure = NULL){}
	public static function redirectToIntended($default = '/' , $status = 302 , $headers = array ( ) , $secure = NULL){}
}

class Route extends \Illuminate\Routing\Router{
	public static function get($uri , $action = NULL){}
	public static function post($uri , $action = NULL){}
	public static function put($uri , $action = NULL){}
	public static function patch($uri , $action = NULL){}
	public static function delete($uri , $action = NULL){}
	public static function options($uri , $action = NULL){}
	public static function any($uri , $action = NULL){}
	public static function match($methods , $uri , $action = NULL){}
	public static function controllers($controllers){}
	public static function controller($uri , $controller , $names = array ( )){}
	public static function resources($resources){}
	public static function resource($name , $controller , $options = array ( )){}
	public static function auth(){}
	public static function group($attributes , $callback){}
	public static function mergeWithLastGroup($new){}
	public static function mergeGroup($new , $old){}
	public static function getLastGroupPrefix(){}
	public static function dispatch($request){}
	public static function dispatchToRoute($request){}
	public static function gatherRouteMiddlewares($route){}
	public static function resolveMiddlewareClassName($name){}
	public static function matched($callback){}
	public static function getMiddleware(){}
	public static function middleware($name , $class){}
	public static function middlewareGroup($name , $middleware){}
	public static function model($key , $class , $callback = NULL){}
	public static function bind($key , $binder){}
	public static function createClassBinding($binding){}
	public static function pattern($key , $pattern){}
	public static function patterns($patterns){}
	public static function prepareResponse($request , $response){}
	public static function hasGroupStack(){}
	public static function getGroupStack(){}
	public static function input($key , $default = NULL){}
	public static function getCurrentRoute(){}
	public static function current(){}
	public static function has($name){}
	public static function currentRouteName(){}
	public static function is(){}
	public static function currentRouteNamed($name){}
	public static function currentRouteAction(){}
	public static function uses(){}
	public static function currentRouteUses($action){}
	public static function getCurrentRequest(){}
	public static function getRoutes(){}
	public static function setRoutes($routes){}
	public static function getPatterns(){}
	public static function macro($name , $macro){}
	public static function hasMacro($name){}
}

class Schema extends \Illuminate\Database\Schema\Blueprint{
	public static function build($connection , $grammar){}
	public static function toSql($connection , $grammar){}
	public static function create(){}
	public static function temporary(){}
	public static function drop(){}
	public static function dropIfExists(){}
	public static function dropColumn($columns){}
	public static function renameColumn($from , $to){}
	public static function dropPrimary($index = NULL){}
	public static function dropUnique($index){}
	public static function dropIndex($index){}
	public static function dropForeign($index){}
	public static function dropTimestamps(){}
	public static function dropTimestampsTz(){}
	public static function dropSoftDeletes(){}
	public static function dropRememberToken(){}
	public static function rename($to){}
	public static function primary($columns , $name = NULL){}
	public static function unique($columns , $name = NULL){}
	public static function index($columns , $name = NULL){}
	public static function foreign($columns , $name = NULL){}
	public static function increments($column){}
	public static function smallIncrements($column){}
	public static function mediumIncrements($column){}
	public static function bigIncrements($column){}
	public static function char($column , $length = 255){}
	public static function string($column , $length = 255){}
	public static function text($column){}
	public static function mediumText($column){}
	public static function longText($column){}
	public static function integer($column , $autoIncrement = false , $unsigned = false){}
	public static function tinyInteger($column , $autoIncrement = false , $unsigned = false){}
	public static function smallInteger($column , $autoIncrement = false , $unsigned = false){}
	public static function mediumInteger($column , $autoIncrement = false , $unsigned = false){}
	public static function bigInteger($column , $autoIncrement = false , $unsigned = false){}
	public static function unsignedTinyInteger($column , $autoIncrement = false){}
	public static function unsignedSmallInteger($column , $autoIncrement = false){}
	public static function unsignedMediumInteger($column , $autoIncrement = false){}
	public static function unsignedInteger($column , $autoIncrement = false){}
	public static function unsignedBigInteger($column , $autoIncrement = false){}
	public static function float($column , $total = 8 , $places = 2){}
	public static function double($column , $total = NULL , $places = NULL){}
	public static function decimal($column , $total = 8 , $places = 2){}
	public static function boolean($column){}
	public static function enum($column , $allowed){}
	public static function json($column){}
	public static function jsonb($column){}
	public static function date($column){}
	public static function dateTime($column){}
	public static function dateTimeTz($column){}
	public static function time($column){}
	public static function timeTz($column){}
	public static function timestamp($column){}
	public static function timestampTz($column){}
	public static function nullableTimestamps(){}
	public static function timestamps(){}
	public static function timestampsTz(){}
	public static function softDeletes(){}
	public static function binary($column){}
	public static function uuid($column){}
	public static function morphs($name , $indexName = NULL){}
	public static function rememberToken(){}
	public static function removeColumn($name){}
	public static function getTable(){}
	public static function getColumns(){}
	public static function getCommands(){}
	public static function getAddedColumns(){}
	public static function getChangedColumns(){}
}

class Session extends \Illuminate\Session\SessionManager{
	public static function getSessionConfig(){}
	public static function getDefaultDriver(){}
	public static function setDefaultDriver($name){}
	public static function driver($driver = NULL){}
	public static function extend($driver , $callback){}
	public static function getDrivers(){}
}

class Session extends \Illuminate\Session\Store{
	public static function start(){}
	public static function getId(){}
	public static function setId($id){}
	public static function isValidId($id){}
	public static function getName(){}
	public static function setName($name){}
	public static function invalidate($lifetime = NULL){}
	public static function migrate($destroy = false , $lifetime = NULL){}
	public static function regenerate($destroy = false){}
	public static function save(){}
	public static function ageFlashData(){}
	public static function has($name){}
	public static function get($name , $default = NULL){}
	public static function pull($key , $default = NULL){}
	public static function hasOldInput($key = NULL){}
	public static function getOldInput($key = NULL , $default = NULL){}
	public static function set($name , $value){}
	public static function put($key , $value = NULL){}
	public static function push($key , $value){}
	public static function flash($key , $value){}
	public static function now($key , $value){}
	public static function flashInput($value){}
	public static function reflash(){}
	public static function keep($keys = NULL){}
	public static function all(){}
	public static function replace($attributes){}
	public static function remove($name){}
	public static function forget($keys){}
	public static function clear(){}
	public static function flush(){}
	public static function isStarted(){}
	public static function registerBag($bag){}
	public static function getBag($name){}
	public static function getMetadataBag(){}
	public static function getBagData($name){}
	public static function token(){}
	public static function getToken(){}
	public static function regenerateToken(){}
	public static function previousUrl(){}
	public static function setPreviousUrl($url){}
	public static function setExists($value){}
	public static function getHandler(){}
	public static function handlerNeedsRequest(){}
	public static function setRequestOnHandler($request){}
}

class Storage extends \Illuminate\Contracts\Filesystem\Factory{
	public static function disk($name = NULL){}
}

class URL extends \Illuminate\Routing\UrlGenerator{
	public static function full(){}
	public static function current(){}
	public static function previous(){}
	public static function to($path , $extra = array ( ) , $secure = NULL){}
	public static function secure($path , $parameters = array ( )){}
	public static function asset($path , $secure = NULL){}
	public static function assetFrom($root , $path , $secure = NULL){}
	public static function secureAsset($path){}
	public static function forceSchema($schema){}
	public static function route($name , $parameters = array ( ) , $absolute = true){}
	public static function action($action , $parameters = array ( ) , $absolute = true){}
	public static function forceRootUrl($root){}
	public static function isValidUrl($path){}
	public static function getRequest(){}
	public static function setRequest($request){}
	public static function setRoutes($routes){}
	public static function setSessionResolver($sessionResolver){}
	public static function setRootControllerNamespace($rootNamespace){}
	public static function macro($name , $macro){}
	public static function hasMacro($name){}
}

class Validator extends \Illuminate\Validation\Validator{
	public static function after($callback){}
	public static function sometimes($attribute , $rules , $callback){}
	public static function each($attribute , $rules){}
	public static function mergeRules($attribute , $rules){}
	public static function passes(){}
	public static function fails(){}
	public static function valid(){}
	public static function invalid(){}
	public static function isAValidFileInstance($value){}
	public static function getDisplayableValue($attribute , $value){}
	public static function attributes(){}
	public static function hasAttribute($attribute){}
	public static function getExtensions(){}
	public static function addExtensions($extensions){}
	public static function addImplicitExtensions($extensions){}
	public static function addExtension($rule , $extension){}
	public static function addImplicitExtension($rule , $extension){}
	public static function getReplacers(){}
	public static function addReplacers($replacers){}
	public static function addReplacer($rule , $replacer){}
	public static function getData(){}
	public static function setData($data){}
	public static function getRules(){}
	public static function setRules($rules){}
	public static function setAttributeNames($attributes){}
	public static function setValueNames($values){}
	public static function getFiles(){}
	public static function setFiles($files){}
	public static function getPresenceVerifier(){}
	public static function setPresenceVerifier($presenceVerifier){}
	public static function getTranslator(){}
	public static function setTranslator($translator){}
	public static function getCustomMessages(){}
	public static function setCustomMessages($messages){}
	public static function getCustomAttributes(){}
	public static function addCustomAttributes($customAttributes){}
	public static function getCustomValues(){}
	public static function addCustomValues($customValues){}
	public static function getFallbackMessages(){}
	public static function setFallbackMessages($messages){}
	public static function failed(){}
	public static function messages(){}
	public static function errors(){}
	public static function getMessageBag(){}
	public static function setContainer($container){}
}

class Validator extends \Illuminate\Validation\Factory{
	public static function make($data , $rules , $messages = array ( ) , $customAttributes = array ( )){}
	public static function extend($rule , $extension , $message = NULL){}
	public static function extendImplicit($rule , $extension , $message = NULL){}
	public static function replacer($rule , $replacer){}
	public static function resolver($resolver){}
	public static function getTranslator(){}
	public static function getPresenceVerifier(){}
	public static function setPresenceVerifier($presenceVerifier){}
}

class View extends \Illuminate\View\View{
	public static function render($callback = NULL){}
	public static function renderSections(){}
	public static function with($key , $value = NULL){}
	public static function nest($key , $view , $data = array ( )){}
	public static function withErrors($provider){}
	public static function getFactory(){}
	public static function getEngine(){}
	public static function name(){}
	public static function getName(){}
	public static function getData(){}
	public static function getPath(){}
	public static function setPath($path){}
	public static function offsetExists($key){}
	public static function offsetGet($key){}
	public static function offsetSet($key , $value){}
	public static function offsetUnset($key){}
}

class View extends \Illuminate\View\Factory{
	public static function file($path , $data = array ( ) , $mergeData = array ( )){}
	public static function make($view , $data = array ( ) , $mergeData = array ( )){}
	public static function of($view , $data = array ( )){}
	public static function name($view , $name){}
	public static function alias($view , $alias){}
	public static function exists($view){}
	public static function renderEach($view , $data , $iterator , $empty = 'raw|'){}
	public static function getEngineFromPath($path){}
	public static function share($key , $value = NULL){}
	public static function creator($views , $callback){}
	public static function composers($composers){}
	public static function composer($views , $callback , $priority = NULL){}
	public static function callComposer($view){}
	public static function callCreator($view){}
	public static function startSection($section , $content = ''){}
	public static function inject($section , $content){}
	public static function yieldSection(){}
	public static function stopSection($overwrite = false){}
	public static function appendSection(){}
	public static function yieldContent($section , $default = ''){}
	public static function flushSections(){}
	public static function flushSectionsIfDoneRendering(){}
	public static function incrementRender(){}
	public static function decrementRender(){}
	public static function doneRendering(){}
	public static function addLocation($location){}
	public static function addNamespace($namespace , $hints){}
	public static function prependNamespace($namespace , $hints){}
	public static function addExtension($extension , $engine , $resolver = NULL){}
	public static function getExtensions(){}
	public static function getEngineResolver(){}
	public static function getFinder(){}
	public static function setFinder($finder){}
	public static function getDispatcher(){}
	public static function setDispatcher($events){}
	public static function getContainer(){}
	public static function setContainer($container){}
	public static function shared($key , $default = NULL){}
	public static function getShared(){}
	public static function hasSection($name){}
	public static function getSections(){}
	public static function getNames(){}
}

}
