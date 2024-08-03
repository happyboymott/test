<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Repository\Filter; use Illuminate\Database\Query\Builder; use Illuminate\Support\Collection; class RepositoryFilter { private $queries; public function __construct() { $this->queries = new Collection(); } public function clear() { $this->queries = new Collection(); return $this; } public function executeQueries(&$lvLqX) { $this->queries->each(function ($R7kqa) use(&$lvLqX) { $lvLqX = call_user_func_array(array($lvLqX, $R7kqa['method']), $R7kqa['arguments'] ? $R7kqa['arguments'] : array()); }); } public function __call($pqQwP, $Rb1XH) { $this->queries->push(array('method' => $pqQwP, 'arguments' => $Rb1XH)); return $this; } }