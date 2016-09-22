<?php
/**
 * Laravel 5.2 静态方法 IDE 提示支持
 * @author 邹义良 <190196539@qq.com>
 */

namespace Illuminate\Database\Eloquent{

    class Model extends \Illuminate\Database\Eloquent\Model{
        /**
         * @return static
         */
        public static function clearBootedModels(){}
        /**
         * @return static
         */
        public static function addGlobalScope($scope , $implementation = NULL){}
        /**
         * @return static
         */
        public static function hasGlobalScope($scope){}
        /**
         * @return static
         */
        public static function getGlobalScope($scope){}
        /**
         * @return static
         */
        public static function getGlobalScopes(){}
        /**
         * @return static
         */
        public static function observe($class , $priority = 0){}
        /**
         * @return static
         */
        public static function fill($attributes){}
        /**
         * @return static
         */
        public static function forceFill($attributes){}
        /**
         * @return static
         */
        public static function newInstance($attributes = array ( ) , $exists = false){}
        /**
         * @return static
         */
        public static function newFromBuilder($attributes = array ( ) , $connection = NULL){}
        /**
         * @return static
         */
        public static function hydrate($items , $connection = NULL){}
        /**
         * @return static
         */
        public static function hydrateRaw($query , $bindings = array ( ) , $connection = NULL){}
        /**
         * @return static
         */
        public static function create($attributes = array ( )){}
        /**
         * @return static
         */
        public static function forceCreate($attributes){}
        /**
         * @return static
         */
        public static function firstOrCreate($attributes){}
        /**
         * @return static
         */
        public static function firstOrNew($attributes){}
        /**
         * @return static
         */
        public static function updateOrCreate($attributes , $values = array ( ) , $options = array ( )){}
        /**
         * @return static
         */
        public static function query(){}
        /**
         * @return static
         */
        public static function on($connection = NULL){}
        /**
         * @return static
         */
        public static function onWriteConnection(){}
        /**
         * @return static
         */
        public static function all($columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function findOrNew($id , $columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function fresh($with = array ( )){}
        /**
         * @return static
         */
        public static function load($relations){}
        /**
         * @return static
         */
        public static function with($relations){}
        /**
         * @return static
         */
        public static function append($attributes){}
        /**
         * @return static
         */
        public static function hasOne($related , $foreignKey = NULL , $localKey = NULL){}
        /**
         * @return static
         */
        public static function morphOne($related , $name , $type = NULL , $id = NULL , $localKey = NULL){}
        /**
         * @return static
         */
        public static function belongsTo($related , $foreignKey = NULL , $otherKey = NULL , $relation = NULL){}
        /**
         * @return static
         */
        public static function morphTo($name = NULL , $type = NULL , $id = NULL){}
        /**
         * @return static
         */
        public static function getActualClassNameForMorph($class){}
        /**
         * @return static
         */
        public static function hasMany($related , $foreignKey = NULL , $localKey = NULL){}
        /**
         * @return static
         */
        public static function hasManyThrough($related , $through , $firstKey = NULL , $secondKey = NULL , $localKey = NULL){}
        /**
         * @return static
         */
        public static function morphMany($related , $name , $type = NULL , $id = NULL , $localKey = NULL){}
        /**
         * @return static
         */
        public static function belongsToMany($related , $table = NULL , $foreignKey = NULL , $otherKey = NULL , $relation = NULL){}
        /**
         * @return static
         */
        public static function morphToMany($related , $name , $table = NULL , $foreignKey = NULL , $otherKey = NULL , $inverse = false){}
        /**
         * @return static
         */
        public static function morphedByMany($related , $name , $table = NULL , $foreignKey = NULL , $otherKey = NULL){}
        /**
         * @return static
         */
        public static function joiningTable($related){}
        /**
         * @return static
         */
        public static function destroy($ids){}
        /**
         * @return static
         */
        public static function delete(){}
        /**
         * @return static
         */
        public static function forceDelete(){}
        /**
         * @return static
         */
        public static function saving($callback , $priority = 0){}
        /**
         * @return static
         */
        public static function saved($callback , $priority = 0){}
        /**
         * @return static
         */
        public static function updating($callback , $priority = 0){}
        /**
         * @return static
         */
        public static function updated($callback , $priority = 0){}
        /**
         * @return static
         */
        public static function creating($callback , $priority = 0){}
        /**
         * @return static
         */
        public static function created($callback , $priority = 0){}
        /**
         * @return static
         */
        public static function deleting($callback , $priority = 0){}
        /**
         * @return static
         */
        public static function deleted($callback , $priority = 0){}
        /**
         * @return static
         */
        public static function flushEventListeners(){}
        /**
         * @return static
         */
        public static function getObservableEvents(){}
        /**
         * @return static
         */
        public static function setObservableEvents($observables){}
        /**
         * @return static
         */
        public static function addObservableEvents($observables){}
        /**
         * @return static
         */
        public static function removeObservableEvents($observables){}
        /**
         * @return static
         */
        public static function update($attributes = array ( ) , $options = array ( )){}
        /**
         * @return static
         */
        public static function push(){}
        /**
         * @return static
         */
        public static function save($options = array ( )){}
        /**
         * @return static
         */
        public static function saveOrFail($options = array ( )){}
        /**
         * @return static
         */
        public static function touchOwners(){}
        /**
         * @return static
         */
        public static function touches($relation){}
        /**
         * @return static
         */
        public static function touch(){}
        /**
         * @return static
         */
        public static function setCreatedAt($value){}
        /**
         * @return static
         */
        public static function setUpdatedAt($value){}
        /**
         * @return static
         */
        public static function getCreatedAtColumn(){}
        /**
         * @return static
         */
        public static function getUpdatedAtColumn(){}
        /**
         * @return static
         */
        public static function freshTimestamp(){}
        /**
         * @return static
         */
        public static function freshTimestampString(){}
        /**
         * @return static
         */
        public static function newQuery(){}
        /**
         * @return static
         */
        public static function newQueryWithoutScope($scope){}
        /**
         * @return static
         */
        public static function newQueryWithoutScopes(){}
        /**
         * @return static
         */
        public static function newEloquentBuilder($query){}
        /**
         * @return static
         */
        public static function newCollection($models = array ( )){}
        /**
         * @return static
         */
        public static function newPivot($parent , $attributes , $table , $exists){}
        /**
         * @return static
         */
        public static function getTable(){}
        /**
         * @return static
         */
        public static function setTable($table){}
        /**
         * @return static
         */
        public static function getKey(){}
        /**
         * @return static
         */
        public static function getQueueableId(){}
        /**
         * @return static
         */
        public static function getKeyName(){}
        /**
         * @return static
         */
        public static function setKeyName($key){}
        /**
         * @return static
         */
        public static function getQualifiedKeyName(){}
        /**
         * @return static
         */
        public static function getRouteKey(){}
        /**
         * @return static
         */
        public static function getRouteKeyName(){}
        /**
         * @return static
         */
        public static function usesTimestamps(){}
        /**
         * @return static
         */
        public static function getMorphClass(){}
        /**
         * @return static
         */
        public static function getPerPage(){}
        /**
         * @return static
         */
        public static function setPerPage($perPage){}
        /**
         * @return static
         */
        public static function getForeignKey(){}
        /**
         * @return static
         */
        public static function getHidden(){}
        /**
         * @return static
         */
        public static function setHidden($hidden){}
        /**
         * @return static
         */
        public static function addHidden($attributes = NULL){}
        /**
         * @return static
         */
        public static function makeVisible($attributes){}
        /**
         * @return static
         */
        public static function withHidden($attributes){}
        /**
         * @return static
         */
        public static function getVisible(){}
        /**
         * @return static
         */
        public static function setVisible($visible){}
        /**
         * @return static
         */
        public static function addVisible($attributes = NULL){}
        /**
         * @return static
         */
        public static function setAppends($appends){}
        /**
         * @return static
         */
        public static function getFillable(){}
        /**
         * @return static
         */
        public static function fillable($fillable){}
        /**
         * @return static
         */
        public static function getGuarded(){}
        /**
         * @return static
         */
        public static function guard($guarded){}
        /**
         * @return static
         */
        public static function unguard($state = true){}
        /**
         * @return static
         */
        public static function reguard(){}
        /**
         * @return static
         */
        public static function isUnguarded(){}
        /**
         * @return static
         */
        public static function unguarded($callback){}
        /**
         * @return static
         */
        public static function isFillable($key){}
        /**
         * @return static
         */
        public static function isGuarded($key){}
        /**
         * @return static
         */
        public static function totallyGuarded(){}
        /**
         * @return static
         */
        public static function getTouchedRelations(){}
        /**
         * @return static
         */
        public static function setTouchedRelations($touches){}
        /**
         * @return static
         */
        public static function getIncrementing(){}
        /**
         * @return static
         */
        public static function setIncrementing($value){}
        /**
         * @return static
         */
        public static function toJson($options = 0){}
        /**
         * @return static
         */
        public static function jsonSerialize(){}
        /**
         * @return static
         */
        public static function toArray(){}
        /**
         * @return static
         */
        public static function attributesToArray(){}
        /**
         * @return static
         */
        public static function relationsToArray(){}
        /**
         * @return static
         */
        public static function getAttribute($key){}
        /**
         * @return static
         */
        public static function getAttributeValue($key){}
        /**
         * @return static
         */
        public static function getRelationValue($key){}
        /**
         * @return static
         */
        public static function hasGetMutator($key){}
        /**
         * @return static
         */
        public static function hasCast($key , $types = NULL){}
        /**
         * @return static
         */
        public static function getCasts(){}
        /**
         * @return static
         */
        public static function setAttribute($key , $value){}
        /**
         * @return static
         */
        public static function hasSetMutator($key){}
        /**
         * @return static
         */
        public static function getDates(){}
        /**
         * @return static
         */
        public static function fromDateTime($value){}
        /**
         * @return static
         */
        public static function setDateFormat($format){}
        /**
         * @return static
         */
        public static function fromJson($value , $asObject = false){}
        /**
         * @return static
         */
        public static function replicate($except = NULL){}
        /**
         * @return static
         */
        public static function getAttributes(){}
        /**
         * @return static
         */
        public static function setRawAttributes($attributes , $sync = false){}
        /**
         * @return static
         */
        public static function getOriginal($key = NULL , $default = NULL){}
        /**
         * @return static
         */
        public static function syncOriginal(){}
        /**
         * @return static
         */
        public static function syncOriginalAttribute($attribute){}
        /**
         * @return static
         */
        public static function isDirty($attributes = NULL){}
        /**
         * @return static
         */
        public static function getDirty(){}
        /**
         * @return static
         */
        public static function getRelations(){}
        /**
         * @return static
         */
        public static function getRelation($relation){}
        /**
         * @return static
         */
        public static function relationLoaded($key){}
        /**
         * @return static
         */
        public static function setRelation($relation , $value){}
        /**
         * @return static
         */
        public static function setRelations($relations){}
        /**
         * @return static
         */
        public static function getConnection(){}
        /**
         * @return static
         */
        public static function getConnectionName(){}
        /**
         * @return static
         */
        public static function setConnection($name){}
        /**
         * @return static
         */
        public static function resolveConnection($connection = NULL){}
        /**
         * @return static
         */
        public static function getConnectionResolver(){}
        /**
         * @return static
         */
        public static function setConnectionResolver($resolver){}
        /**
         * @return static
         */
        public static function unsetConnectionResolver(){}
        /**
         * @return static
         */
        public static function getEventDispatcher(){}
        /**
         * @return static
         */
        public static function setEventDispatcher($dispatcher){}
        /**
         * @return static
         */
        public static function unsetEventDispatcher(){}
        /**
         * @return static
         */
        public static function getMutatedAttributes(){}
        /**
         * @return static
         */
        public static function cacheMutatedAttributes($class){}
        /**
         * @return static
         */
        public static function offsetExists($offset){}
        /**
         * @return static
         */
        public static function offsetGet($offset){}
        /**
         * @return static
         */
        public static function offsetSet($offset , $value){}
        /**
         * @return static
         */
        public static function offsetUnset($offset){}
    //}

    //class Model extends \Illuminate\Database\Eloquent\Builder{
        /**
         * @return static
         */
        public static function withGlobalScope($identifier , $scope){}
        /**
         * @return static
         */
        public static function withoutGlobalScope($scope){}
        /**
         * @return static
         */
        public static function withoutGlobalScopes($scopes = NULL){}
        /**
         * @return static
         */
        public static function find($id , $columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function findMany($ids , $columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function findOrFail($id , $columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function first($columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function firstOrFail($columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function get($columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function value($column){}
        /**
         * @return static
         */
        public static function chunk($count , $callback){}
        /**
         * @return static
         */
        public static function each($callback , $count = 1000){}
        /**
         * @return static
         */
        public static function pluck($column , $key = NULL){}
        /**
         * @return static
         */
        public static function lists($column , $key = NULL){}
        /**
         * @return static
         */
        public static function paginate($perPage = NULL , $columns = array (   0 => '*', ) , $pageName = 'page' , $page = NULL){}
        /**
         * @return static
         */
        public static function simplePaginate($perPage = NULL , $columns = array (   0 => '*', ) , $pageName = 'page'){}
        /**
         * @return static
         */
        public static function update($values){}
        /**
         * @return static
         */
        public static function increment($column , $amount = 1 , $extra = array ( )){}
        /**
         * @return static
         */
        public static function decrement($column , $amount = 1 , $extra = array ( )){}
        /**
         * @return static
         */
        public static function delete(){}
        /**
         * @return static
         */
        public static function forceDelete(){}
        /**
         * @return static
         */
        public static function onDelete($callback){}
        /**
         * @return static
         */
        public static function getModels($columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function eagerLoadRelations($models){}
        /**
         * @return static
         */
        public static function getRelation($name){}
        /**
         * @return static
         */
        public static function where($column , $operator = NULL , $value = NULL , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function orWhere($column , $operator = NULL , $value = NULL){}
        /**
         * @return static
         */
        public static function has($relation , $operator = '>=' , $count = 1 , $boolean = 'and' , $callback = NULL){}
        /**
         * @return static
         */
        public static function doesntHave($relation , $boolean = 'and' , $callback = NULL){}
        /**
         * @return static
         */
        public static function whereHas($relation , $callback , $operator = '>=' , $count = 1){}
        /**
         * @return static
         */
        public static function whereDoesntHave($relation , $callback = NULL){}
        /**
         * @return static
         */
        public static function orHas($relation , $operator = '>=' , $count = 1){}
        /**
         * @return static
         */
        public static function orWhereHas($relation , $callback , $operator = '>=' , $count = 1){}
        /**
         * @return static
         */
        public static function with($relations){}
        /**
         * @return static
         */
        public static function applyScopes(){}
        /**
         * @return static
         */
        public static function getQuery(){}
        /**
         * @return static
         */
        public static function toBase(){}
        /**
         * @return static
         */
        public static function setQuery($query){}
        /**
         * @return static
         */
        public static function getEagerLoads(){}
        /**
         * @return static
         */
        public static function setEagerLoads($eagerLoad){}
        /**
         * @return static
         */
        public static function getModel(){}
        /**
         * @return static
         */
        public static function setModel($model){}
        /**
         * @return static
         */
        public static function macro($name , $callback){}
        /**
         * @return static
         */
        public static function getMacro($name){}
    //}

    //class Model extends \Illuminate\Database\Query\Builder{
        /**
         * @return static
         */
        public static function select($columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function selectRaw($expression , $bindings = array ( )){}
        /**
         * @return static
         */
        public static function selectSub($query , $as){}
        /**
         * @return static
         */
        public static function addSelect($column){}
        /**
         * @return static
         */
        public static function distinct(){}
        /**
         * @return static
         */
        public static function from($table){}
        /**
         * @return static
         */
        public static function join($table , $one , $operator = NULL , $two = NULL , $type = 'inner' , $where = false){}
        /**
         * @return static
         */
        public static function joinWhere($table , $one , $operator , $two , $type = 'inner'){}
        /**
         * @return static
         */
        public static function leftJoin($table , $first , $operator = NULL , $second = NULL){}
        /**
         * @return static
         */
        public static function leftJoinWhere($table , $one , $operator , $two){}
        /**
         * @return static
         */
        public static function rightJoin($table , $first , $operator = NULL , $second = NULL){}
        /**
         * @return static
         */
        public static function rightJoinWhere($table , $one , $operator , $two){}
        /**
         * @return static
         */
        public static function where($column , $operator = NULL , $value = NULL , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function orWhere($column , $operator = NULL , $value = NULL){}
        /**
         * @return static
         */
        public static function whereRaw($sql , $bindings = array ( ) , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function orWhereRaw($sql , $bindings = array ( )){}
        /**
         * @return static
         */
        public static function whereBetween($column , $values , $boolean = 'and' , $not = false){}
        /**
         * @return static
         */
        public static function orWhereBetween($column , $values){}
        /**
         * @return static
         */
        public static function whereNotBetween($column , $values , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function orWhereNotBetween($column , $values){}
        /**
         * @return static
         */
        public static function whereNested($callback , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function forNestedWhere(){}
        /**
         * @return static
         */
        public static function addNestedWhereQuery($query , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function whereExists($callback , $boolean = 'and' , $not = false){}
        /**
         * @return static
         */
        public static function orWhereExists($callback , $not = false){}
        /**
         * @return static
         */
        public static function whereNotExists($callback , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function orWhereNotExists($callback){}
        /**
         * @return static
         */
        public static function addWhereExistsQuery($query , $boolean = 'and' , $not = false){}
        /**
         * @return static
         */
        public static function whereIn($column , $values , $boolean = 'and' , $not = false){}
        /**
         * @return static
         */
        public static function orWhereIn($column , $values){}
        /**
         * @return static
         */
        public static function whereNotIn($column , $values , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function orWhereNotIn($column , $values){}
        /**
         * @return static
         */
        public static function whereNull($column , $boolean = 'and' , $not = false){}
        /**
         * @return static
         */
        public static function orWhereNull($column){}
        /**
         * @return static
         */
        public static function whereNotNull($column , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function orWhereNotNull($column){}
        /**
         * @return static
         */
        public static function whereDate($column , $operator , $value , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function orWhereDate($column , $operator , $value){}
        /**
         * @return static
         */
        public static function whereDay($column , $operator , $value , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function whereMonth($column , $operator , $value , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function whereYear($column , $operator , $value , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function dynamicWhere($method , $parameters){}
        /**
         * @return static
         */
        public static function groupBy(){}
        /**
         * @return static
         */
        public static function having($column , $operator = NULL , $value = NULL , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function orHaving($column , $operator = NULL , $value = NULL){}
        /**
         * @return static
         */
        public static function havingRaw($sql , $bindings = array ( ) , $boolean = 'and'){}
        /**
         * @return static
         */
        public static function orHavingRaw($sql , $bindings = array ( )){}
        /**
         * @return static
         */
        public static function orderBy($column , $direction = 'asc'){}
        /**
         * @return static
         */
        public static function latest($column = 'created_at'){}
        /**
         * @return static
         */
        public static function oldest($column = 'created_at'){}
        /**
         * @return static
         */
        public static function orderByRaw($sql , $bindings = array ( )){}
        /**
         * @return static
         */
        public static function offset($value){}
        /**
         * @return static
         */
        public static function skip($value){}
        /**
         * @return static
         */
        public static function limit($value){}
        /**
         * @return static
         */
        public static function take($value){}
        /**
         * @return static
         */
        public static function forPage($page , $perPage = 15){}
        /**
         * @return static
         */
        public static function union($query , $all = false){}
        /**
         * @return static
         */
        public static function unionAll($query){}
        /**
         * @return static
         */
        public static function lock($value = true){}
        /**
         * @return static
         */
        public static function lockForUpdate(){}
        /**
         * @return static
         */
        public static function sharedLock(){}
        /**
         * @return static
         */
        public static function toSql(){}
        /**
         * @return static
         */
        public static function find($id , $columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function value($column){}
        /**
         * @return static
         */
        public static function first($columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function get($columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function paginate($perPage = 15 , $columns = array (   0 => '*', ) , $pageName = 'page' , $page = NULL){}
        /**
         * @return static
         */
        public static function simplePaginate($perPage = 15 , $columns = array (   0 => '*', ) , $pageName = 'page'){}
        /**
         * @return static
         */
        public static function getCountForPagination($columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function chunk($count , $callback){}
        /**
         * @return static
         */
        public static function each($callback , $count = 1000){}
        /**
         * @return static
         */
        public static function pluck($column , $key = NULL){}
        /**
         * @return static
         */
        public static function lists($column , $key = NULL){}
        /**
         * @return static
         */
        public static function implode($column , $glue = ''){}
        /**
         * @return static
         */
        public static function exists(){}
        /**
         * @return static
         */
        public static function count($columns = '*'){}
        /**
         * @return static
         */
        public static function min($column){}
        /**
         * @return static
         */
        public static function max($column){}
        /**
         * @return static
         */
        public static function sum($column){}
        /**
         * @return static
         */
        public static function avg($column){}
        /**
         * @return static
         */
        public static function average($column){}
        /**
         * @return static
         */
        public static function aggregate($function , $columns = array (   0 => '*', )){}
        /**
         * @return static
         */
        public static function insert($values){}
        /**
         * @return static
         */
        public static function insertGetId($values , $sequence = NULL){}
        /**
         * @return static
         */
        public static function update($values){}
        /**
         * @return static
         */
        public static function increment($column , $amount = 1 , $extra = array ( )){}
        /**
         * @return static
         */
        public static function decrement($column , $amount = 1 , $extra = array ( )){}
        /**
         * @return static
         */
        public static function delete($id = NULL){}
        /**
         * @return static
         */
        public static function truncate(){}
        /**
         * @return static
         */
        public static function newQuery(){}
        /**
         * @return static
         */
        public static function mergeWheres($wheres , $bindings){}
        /**
         * @return static
         */
        public static function raw($value){}
        /**
         * @return static
         */
        public static function getBindings(){}
        /**
         * @return static
         */
        public static function getRawBindings(){}
        /**
         * @return static
         */
        public static function setBindings($bindings , $type = 'where'){}
        /**
         * @return static
         */
        public static function addBinding($value , $type = 'where'){}
        /**
         * @return static
         */
        public static function mergeBindings($query){}
        /**
         * @return static
         */
        public static function getConnection(){}
        /**
         * @return static
         */
        public static function getProcessor(){}
        /**
         * @return static
         */
        public static function getGrammar(){}
        /**
         * @return static
         */
        public static function useWritePdo(){}
        /**
         * @return static
         */
        public static function macro($name , $macro){}
        /**
         * @return static
         */
        public static function hasMacro($name){}
        /**
         * @return static
         */
        public static function macroCall($method , $parameters){}
    }

}
