<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Repository; class EmptyItem extends \stdClass { private $attributes = array(); public function __construct($wfw82 = array()) { $this->attributes = array_merge($this->attributes, $wfw82); } public function __get($KtHB2) { return isset($this->attributes[$KtHB2]) ? $this->attributes[$KtHB2] : null; } public function __set($KtHB2, $R7kqa) { $this->attributes[$KtHB2] = $R7kqa; } }